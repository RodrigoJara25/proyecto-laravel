<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Importamos el controlador
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('auth.login');
});

/* Route::get('/empleado', function () {
    return view('empleado.index');
});

// Acceder mediante controllers 
Route::get('/empleado/create', [EmpleadoController::class,'create']); */

// Con esto se crea una ruta hacia todos los documentos de la carpeta empleados
Route::resource('empleado', EmpleadoController::class);

Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
});