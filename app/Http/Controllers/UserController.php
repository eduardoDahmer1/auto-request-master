<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();

        $remember = isset($data["remember"]) && $data["remember"] ? true : false;

        if (!Auth::attempt(['email' => $data["email"], 'password' => $data["password"]], $remember)) {
            return redirect()->route("login")->withErrors(["Credenciais Invalidas"])->withInput();
        }

        return redirect()->route("index");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
