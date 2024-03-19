<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.header');
})->name('main');


//Rutas de formularios

Route::get('/registro-departamento', function () {
    return view('forms.department_registrer');
})->name('depto_reg');
