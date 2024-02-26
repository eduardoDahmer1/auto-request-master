<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
    {
        return view('admin.activity_log.index')
            ->with(
                'activityLogs',
                ActivityLog::with(['user'])->orderByDesc('id')->paginate(15)
            );
    }
}
