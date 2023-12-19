<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/words', [\App\Http\Controllers\Word\IndexController::class, '__invoke'])->middleware('auth')->name('word.index');
Route::get('/words/create', [\App\Http\Controllers\Word\CreateController::class, '__invoke'])->name('word.create');
Route::post('/words', [\App\Http\Controllers\Word\StoreController::class, '__invoke'])->name('word.store');
Route::get('/words/{word}', [\App\Http\Controllers\Word\ShowController::class, '__invoke'])->name('word.show');
Route::get('/words.{word}', [\App\Http\Controllers\Word\ShowFilteredByLetterController::class, '__invoke'])->name('word.show_filtered_by_letter');
Route::get('words/{word}/edit', [\App\Http\Controllers\Word\EditController::class, '__invoke'])->name('word.edit');
Route::patch('words/{word}', [\App\Http\Controllers\Word\UpdateController::class, '__invoke'])->name('word.update');
Route::delete('/words/{word}', [\App\Http\Controllers\Word\DeleteController::class, '__invoke'])->name('word.destroy');
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->middleware('guest');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->middleware('auth')->name('logout');

