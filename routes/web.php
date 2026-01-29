<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;

Route::get('/', function () {
    return view('startup');
});

Route::post('/startups', [StartupController::class, 'store'])->name('startups.store');

Route::get('/startups', [StartupController::class, 'store'])->name('startups.store');