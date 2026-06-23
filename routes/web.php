<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');   // This makes your portfolio the homepage
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';