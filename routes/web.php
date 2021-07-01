<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Ruta que está protegida con el componente de autenticación sanctum y se llama dashboard
Route::get('dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

//Ruta tipo recurso para las notas y protegido con el middleware de sanctum
Route::resource('notes', App\Http\Controllers\NoteController::class)
    ->middleware('auth:sanctum');

