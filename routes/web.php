<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fakultas', function () {
    return view('fakultas.list-fakultas');
});

Route::get('/edit', function () {
    return view('fakultas.edit-fakultas');
});

Route::get('/detail', function () {
    return view('fakultas.detail-fakultas');
});