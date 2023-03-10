<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function login_page(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('backand.auth.login');
    }


    public function login(LoginRequest $loginRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $loginRequest->validated();

        if (Auth::attempt($data)) {
            return redirect()->route('limitless');
        }
        return redirect()->back()->with('error', 'Invalid');
    }


    public function register_page(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('backand.auth.register');
    }


    public function register(RegisterRequest $registerRequest): \Illuminate\Http\RedirectResponse

    {
        $data = $registerRequest->validated();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('limitless');
    }

    public function logout(): \Illuminate\Http\RedirectResponse

    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('login');
        }
        return redirect()->back()->with('success', 'You are not logged in');

    }
}
