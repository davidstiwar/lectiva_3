<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\ProyectoController;

Route::get('/', function () {return view('welcome');});

// Ruta para el pagina principal
Route::get('/welcome', function () {return view('welcome');})->name('welcome');

// Ruta para mostrar el formulario de login
Route::get('/login', function () {return view('login');})->name('login');
// Ruta para procesar el formulario de login y validar los datos del usuario
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Ruta para mostrar la pag de proyecto
Route::get('/proyecto', function () {return view('proyecto');})->name('proyecto'); 

// Ruta para mostrar la pag de Servicio
Route::get('/servicio', function () {return view('servicio');})->name('servicio'); 

// Ruta para mostrar el formulario de registro
Route::get('/registro', function () {return view('registro');})->name('registro');
// Ruta para procesar el formulario de resgisto 
Route::post('/registro', [RegistroController::class, 'registro']); 


// Ruta para mostrar vista de los proyectos
Route::get('/proyecto/venta', [ProyectoController::class, 'venta'])->name('proyecto_venta');
Route::get('/proyecto/invertir', [ProyectoController::class, 'invertir'])->name('proyecto_invertir');
