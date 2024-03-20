<?php

declare(strict_types=1);
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(StoreRequest $request)
    {
        $user = $request->validated();
        unset($user['confirmPassword']);
        $user = User::create($user);
        $user['password'] = Hash::make($user['password']);
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
