<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Site;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
            ->with('sites', Site::all()->groupBy('type'))
            ->with('types', Site::getPossibleTypes());
    }

    public function status(Site $site)
    {
        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->get($site->url);

            $site->status = $response->status();
        } catch (\Throwable $th) {
            Log::error($th);
            abort(500);
        }

        return view("components.list-item")->with("site", $site);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view("admin.sites.index")->with('sites', Site::orderByDesc('id')->paginate(15));
    }

    public function create()
    {
        $this->authorize('create', Site::class);
        return view('admin.sites.create')->with('options', Site::getPossibleTypes());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Site::class);
        $data = $request->validate([
            'name' => 'required',
            'url' => 'required',
            'type' => 'required',
            'active' => 'boolean'
        ]);

        $site = new Site();
        $data['active'] = isset($data['active']) && $data['active'] === '1' ? true : false;
        $site->fill($data);
        $site->save();

        return redirect('dashboard')->with('success', 'Site criado com sucesso');
    }

    public function edit(Site $site)
    {
        $this->authorize('update', $site);
        return view('admin.sites.edit')
            ->with('site', $site)
            ->with('options', Site::getPossibleTypes());
    }

    public function update(Request $request, Site $site)
    {
        $this->authorize('update', $site);
        $data = $request->validate([
            'name' => 'required',
            'url' => 'required',
            'type' => 'required',
        ]);

        $site->update($data);
        return redirect('dashboard')->with('success', 'Site editado com sucesso');
    }

    public function disable(Request $request, Site $site)
    {
        $this->authorize('changeStatus', $site);
        $data = $request->validate(['reason' => 'required']);
        ActivityLog::create([
            'description' => $data['reason'],
            'user_id' => auth()->id(),
            'subject_name' => $site::class,
            'subject_id' => $site->id,
            'event' => $site->active ? 'disable' : 'enable'
        ]);

        $site->active = !$site->active;
        $site->save();

        return to_route('dashboard');
    }
}
