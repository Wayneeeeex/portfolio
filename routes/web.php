<?php

use Illuminate\Support\Facades\Route;

// This forces your dashboard to load right away on the homepage
Route::get('/', function () {
    return view('dashboard');   
});

// Temporarily comment out or remove the auth check to see if it loads on Vercel
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';