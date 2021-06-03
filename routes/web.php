<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('inicio', function () {
    return view('app/index');
});
Route::get('vision-medics', function () {
    return view('welcome');
});
Route::get('inicio-sesion', function () {
    return view('app/login/login');
});
Route::get('registrarse', function () {
    return view('app/login/signup');
});



