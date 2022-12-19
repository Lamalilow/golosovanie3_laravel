<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerView()
    {
        return view('user.register');
    }

    public function registerPost(RegistrRequest $request)
    {
        $requests = $request->validated();
        $requests['password'] = Hash::make($requests['password']);
        User::create($requests);
        return redirect(route('login'));

    }
    public function loginView()
    {
        return view('user.login');
    }
    public function loginPost(LoginRequest $request)
    {
        if(Auth::attempt($request->validated())){
            $request->session()->regenerate();
            return redirect()->route('/');
        }
        return back()->with(['errorSuccess' => 'Неверный логин или пароль']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }

    public function warningView()
    {
        return view('warning');
    }

}
