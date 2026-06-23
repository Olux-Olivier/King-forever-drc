<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('index');
})->name('accueil');

Route::get('/accueil1', function () {
    return view('index1');
})->name('accueil1');
