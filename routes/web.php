<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Type_documentController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\Civil_statusController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\AuxiliaryController;
use App\Http\Controllers\Medical_historyController;
use App\Http\Controllers\Medical_examController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Schedule_apointmentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Type_appointmentController;
use App\Http\Controllers\Available_timeController;
use App\Http\Controllers\Lab_manufacturerController;
use App\Http\Controllers\InventoryController;




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
Route::get('inicio-sesion', [LoginController::class, 'index']);
Route::post('inicio-sesion', [LoginController::class, 'login']);

//rutas de registro
Route::get('registrarse',[SignupController::class, 'create']);

//inicio dashboard
Route::get('inicio', function () {
    return view('app/index');
});

// permisos: rol administrador
Route::middleware('role:Administrador')->group(function (){

    //modulo usuarios
    Route::get('menu/usuarios', function () {
        return view('app/user/menu');
    });

    //tipos de usuario
    Route::get('menu/tipos-de-usuarios', function () {
        return view('app/user/type_users/menu');
    });

    //rutas de usuarios

    Route::get('usuarios',[UserController::class, 'index']);
    Route::get('usuarios/crear', [UserController::class, 'create']);
    Route::post('usuarios',[UserController::class, 'store']);

    //rutas patients
    Route::resource('usuarios/pacientes', PatientController::class);

    //rutas specialists
    Route::resource('usuarios/especialistas', SpecialistController::class);

    //rutas auxiliaries
    Route::resource('usuarios/auxiliares', AuxiliaryController::class);

    //rutas de Civil_statuses
    Route::resource('usuarios/estado-civil', Civil_statusController::class);

    //rutas de genders
    Route::resource('usuarios/generos', GenderController::class);

    //rutas de type_documents
    Route::resource('usuarios/tipo-documento', Type_documentController::class);

    //rutas de roles
    Route::resource('usuarios/roles', RolController::class);

    //rutas de eps
    Route::resource('usuarios/eps', EpsController::class);


    //Modulo Historial Medico & Examen medico
    Route::get('menu/clinical', function () {
        return view('app/medical/menu');
    });

    //rutas historial medico
    Route::resource('clinical/historial-medico', Medical_historyController::class);

    //rutas examenes medicos
    Route::get('clinical/examen-medico/{id}', [Medical_examController::class, 'index']);
    Route::get('clinical/examen-medico/create/{id_historial}', [Medical_examController::class, 'create']);
    Route::post('clinical/examen-medico', [Medical_examController::class, 'store']);
    Route::get('clinical/examen-medico/{id}/show', [Medical_examController::class, 'show']);
    Route::delete('clinical/examen-medico/{id}/{id_history}',[Medical_examController::class,'destroy']);
    Route::get('clinical/examen-medico/{id}/edit', [Medical_examController::class, 'edit']);
    Route::put('clinical/examen-medico/{id}', [Medical_examController::class, 'update']);


    //modulo citas
    Route::get('menu/citas', function () {
        return view('app/appointment/menu');
    });

    //rutas citas
    Route::resource('agendar-citas',AppointmentController ::class);

    //rutas citas por calendario
    Route::get('calendario/citas', [Schedule_apointmentController::class, 'index']);
    Route::post('calendario/citas/mostrar', [Schedule_apointmentController::class, 'show']);
    Route::post('calendario/citas/editar/{id}', [Schedule_apointmentController::class, 'edit']);
    Route::post('calendario/citas/actualizar/{id}', [Schedule_apointmentController::class, 'update']);
    Route::post('calendario/citas/agregar', [Schedule_apointmentController::class, 'store']);
    Route::post('calendario/citas/borrar/{id}',[Schedule_apointmentController::class, 'destroy']);

    //rutas de type_appoinment
    Route::resource('citas/tipo-cita',Type_appointmentController ::class);

    //rutas de available time
    Route::resource('citas/tiempo',Available_timeController ::class);

    //modulo Inventario
    Route::get('menu/inventario', function () {
        return view('app/inventory/menu');
    });

    //rutas de productos
    Route::resource('inventario/productos', ProductController::class);

    //rutas de laboratorio/fabricante
    Route::resource('inventario/fabricantes', Lab_manufacturerController::class);

    //rutas de Inventario
    Route::resource('inventario', InventoryController::class);
    Route::get('cantidad/{id}', [InventoryController::class, 'amount']);
    Route::put('cantidad/{id}', [InventoryController::class, 'amountSave']);
});

// rutas de prueba
Route::get('prueba', function () {
    return view('app/user/index');
});
