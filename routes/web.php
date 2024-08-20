<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/customers', function () {
    return view('clients.index');
});

Route::get('/reports', function () {
    return view('reports.index');
});

Route::get('/services', function () {
    return view('services.index');
});
