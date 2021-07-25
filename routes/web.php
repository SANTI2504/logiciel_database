<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Type_documentController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;


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


/*
//jetstream
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/inicio', function () {
    return view('app/index');
})->name('inicio');
*/

Route::get('/', function () {
    return view('welcome');
});

//rutas de inicio de sesion
Route::get('inicio-sesion', function () {
    return view('app/login/login');
});

//rutas de registro
Route::get('registrarse',[SignupController::class, 'create']);

//inicio dashboard
Route::get('inicio', function () {
    return view('app/index');
});

// rol administrador
Route::middleware('role:Administrador')->group(function (){



    //modulo usuarios
    Route::get('menu/usuarios', function () {
        return view('app/user/menu');
    });

    //rutas de usuarios
    Route::get('usuarios',[UserController::class, 'index']);

    Route::get('usuarios/crear', [UserController::class, 'create']);

    Route::post('usuarios',[UserController::class, 'store']);

    //rutas de type_documents
    Route::get('usuarios/tipo-documento',[Type_documentController::class,'index']);

    Route::get('usuarios/tipo-documento/crear',[Type_documentController::class,'create']);

    Route::post('usuarios/tipo-documento',[Type_documentController::class, 'store']);

    Route::delete('usuarios/tipo-documento/{id}',[Type_documentController::class, 'destroy']);

    Route::get('usuarios/tipo-documento/editar/{id}', [Type_documentController::class, 'edit']);

    Route::put('usuarios/tipo-documento/{id}', [Type_documentController::class, 'update']);


    //rutas de roles
    Route::get('usuarios/roles',[RolController::class, 'index']);

    Route::get('usuarios/roles/crear',[RolController::class,'create']);

    Route::post('usuarios/roles',[RolController::class, 'store']);

    Route::delete('usuarios/roles/{id}',[RolController::class, 'destroy']);

    Route::get('usuarios/roles/editar/{id}', [RolController::class, 'edit']);

    Route::put('usuarios/roles/{id}', [RolController::class, 'update']);

});




// rutas de prueba
Route::get('prueba', function () {
    return view('app/user/index');
});
