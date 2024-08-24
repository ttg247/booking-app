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

Route::get('/reports/appointments', function () {
    return view('reports.appointments');
})->name('reports-appointments');

Route::get('/reports/clients', function () {
    return view('reports.clients');
})->name('reports-clients');


Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/staff', function () {
    return view('staff.index');
})->name('staff');

Route::get('/forms', function () {
    return view('forms');
})->name('basic-form');

Route::get('/all/forms', function () {
    return view('ui/forms');
})->name('all-form');
Route::get('/all/charts', function () {
    return view('ui/charts');
})->name('all-chart');
