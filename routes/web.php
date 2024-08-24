<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/calendar', function () {
    return view('calendar.index');
})->name('calendar');

Route::get('/online-bookings', function () {
    return view('bookings.index');
})->name('bookings');

Route::get('/customers', function () {
    return view('clients.index');
})->name('contacts');

Route::get('/marketing', function () {
    return view('marketing.index');
})->name('marketing');

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports');

Route::get('/services', function () {
    return view('services.index');
})->name('services');


Route::get('/staff', function () {
    return view('staff.index');
})->name('staff');
