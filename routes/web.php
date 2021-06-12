<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Type_documentController;

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


Route::get('/', function () {
    return view('welcome');
});


Route::get('inicio-sesion', function () {
    return view('app/login/login');
});
Route::get('registrarse', function () {
    return view('app/login/signup');
});



/*
//jetstream
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/inicio', function () {
    return view('app/index');
})->name('inicio');


//modulo usuarios
Route::get('menu/usuarios', function () {
    return view('app/user/menu');
});

//rutas de type_document
Route::get('usuarios/tipo-documento',[Type_documentController::class,'index']);
Route::get('usuarios/tipo-documento/crear',[Type_documentController::class,'create']);
