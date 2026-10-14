<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - CeLOE LMS Prototipe
|--------------------------------------------------------------------------
*/

// Root redirects directly to the LMS Login Page
Route::get('/', function () {
    return redirect()->route('login');
});

// FR-01 / L001: Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
