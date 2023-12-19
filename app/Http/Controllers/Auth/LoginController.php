<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('word.index');
        }
        return back();
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
