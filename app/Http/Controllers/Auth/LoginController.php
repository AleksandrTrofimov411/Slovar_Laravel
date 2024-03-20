<?php
//строгий мод
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider; //битый импорт?
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //тип данныХ?
    public function create()
    {
        return view('auth.login');
    }

    //тип данных?
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('word.index');
        } // пустая трока перед return
        return back();
    }

    //тип данных??
    public function destroy(Request $request)
    {
        Auth::logout(); //тоже самое
        return redirect()->route('login');
    }
}
