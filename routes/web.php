<?php

use App\Http\Controllers\Register\AuthController;
use App\Http\Controllers\Register\RegisterController;
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

Route::get('/', function () {
    $title = 'Главная';
    return view('main', compact('title'));
}) -> name('main');

Route::get('/register', function () {
   $title = 'Регистрация';
   return view('register', compact('title'));
})-> name('register.index');
Route::post('/register', [RegisterController::class, 'register']) -> name('register');

Route::get('/login', function () {
    $title = 'Логин';
    return view('login', compact('title'));
})-> name('login.index');
Route::post('/login', [AuthController::class, 'login']) -> name('login');

Route::get('/profile', function () {
    $title = 'Профиль';
    return view('profile', compact('title'));
})-> name('profile');
