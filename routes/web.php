<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

Route::view('/','home')->name('home');
Route::resource('proyecto','App\Http\Controllers\ProjectController')->names('projects')->parameters(['proyecto' => 'project']);
Route::resource('estudiante','App\Http\Controllers\EstudianteController')->names('estudiantes');

Route::get('/emailcontacto', function () {
    return view('emails.emailform');
})->name('emailcontacto');

Route::post('/contactar', 'App\Http\Controllers\EmailContactoController@contact')->name('contact');
