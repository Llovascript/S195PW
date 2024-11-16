<?php

use App\Http\Controllers\clienteControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//RUTA DE CLIENTE CONTROLADOR 
Route::get('/cliente/create', [clienteControlador::class,'create'])->name('formulario');
Route::post('/cliente', [clienteControlador::class,'store'])->name('procesar');
Route::get('/clientes', [clienteControlador::class,'index'])->name('clientes');
Route::get('/', [clienteControlador::class,'home'])->name('bienvenido');




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome');

// Route::view('/form', 'formulario')->name('formulario') ;

// Route::view('/', 'bienvenido')->name('bienvenido');

// Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes');