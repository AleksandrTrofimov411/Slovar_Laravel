<?php
//строгий мод
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //зачем тут пустая строка??? тип данных
    public function create()
    {
        return view('auth.register');
    }

    //тип данных
    public function store(StoreRequest $request)
    {
        $user = $request->validated();
        unset($user['confirmPassword']);
        $user = User::create($user);
        $user['password'] = Hash::make($user['password']);
        Auth::login($user); //пустая строка перед ретурн
        return redirect(RouteServiceProvider::HOME);
    }
}
