<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/calendar', function () {
    return view('calendar.index');
});

Route::get('/online-bookings', function () {
    return view('bookings.index');
});

Route::get('/customers', function () {
    return view('clients.index');
});

Route::get('/marketing', function () {
    return view('marketing.index');
});

Route::get('/reports', function () {
    return view('reports.index');
});

Route::get('/services', function () {
    return view('services.index');
});


Route::get('/staff', function () {
    return view('staff.index');
});
