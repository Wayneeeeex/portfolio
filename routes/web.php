<?php

use Illuminate\Support\Facades\Route;

// Temporarily return a raw string instead of the view
Route::get('/', function () {
    return 'LARAVEL IS ROUTING PERFECTLY!'; 
});

// ... rest of your routes
// Temporarily comment out or remove the auth check to see if it loads on Vercel
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';