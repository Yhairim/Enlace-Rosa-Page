<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('home');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

// Secciones públicas principales
Route::get('/clinica', function () {
    return view('clinica');
})->name('clinica');

Route::get('/computacional', function () {
    return view('computacional');
})->name('computacional');

Route::get('/publicaciones', function () {
    return view('publicaciones');
})->name('publicaciones');

Route::get('/sitios', function () {
    return view('sitios');
})->name('sitios');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');
