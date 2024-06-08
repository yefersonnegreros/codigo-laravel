<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Servicios2Controller;
use App\Http\Controllers\Servicios3Controller;
use App\Http\Controllers\ServiciosController;

$servicios = [
    // ['titulo' => 'Servicio 01'],
    // ['titulo' => 'Servicio 02'],
    // ['titulo' => 'Servicio 03'],
    // ['titulo' => 'Servicio 04'],
    // ['titulo' => 'Servicio 05'],
];


Route::view('/','home')->name('home');


Route::view('nosotros','nosotros')->name('nosotros');
// Route::get('servicios', [Servicios2Controller::class, 'index'])->name('servicios');
Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('servicios/{id}',[ServiciosController::class,'show'])->name('servicios.show');

// Route::resource('servicios', Servicios2Controller::class)->only(['index', 'show']);
// Route::resource('servicios', Servicios2Controller::class)->except(['index', 'show']);
// Route::resource('servicios', Servicios3Controller::class);


Route::view('contacto','contacto')->name('contacto');


