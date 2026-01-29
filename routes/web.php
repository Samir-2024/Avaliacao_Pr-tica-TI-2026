<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;

// Rota principal: agora ela chama o Controller para buscar os dados no banco
Route::get('/', [StartupController::class, 'index'])->name('startups.index');

// Rota para processar o formulário
Route::post('/startups', [StartupController::class, 'store'])->name('startups.store');