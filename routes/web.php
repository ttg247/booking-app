<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

      Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register-user', [UserController::class, 'register'])->name('register-user');
    
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::post('/login', [UserController::class, 'login'])->name('login');
    
//protected routes
Route::middleware('auth')->group(function () {
    // Routes that only owners can access   
    
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/dashboard', function () {
        $userName = Auth::user()->name;    
        return view('welcome', compact('userName'));
    });
    
    Route::get('/calendar', function () {
        return view('calendar.index');
    })->name('calendar');
    
    Route::get('/online-bookings', function () {
        return view('bookings.index');
    })->name('bookings');
    
    
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');


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
    
    
    Route::get('/services', [ServiceController::class, 'index'])->name('services');

    //post method to create business
    Route::post('/create-business', [BusinessController::class, 'store'])->name('create-business');
    Route::post('/create-service', [ServiceController::class, 'store'])->name('create-service');

    
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
});

Route::group(['middleware' => ['role:staff']], function () {
    // Routes that only staff can access
});

Route::group(['middleware' => ['role:customer']], function () {
    // Routes that only customers can access
});
