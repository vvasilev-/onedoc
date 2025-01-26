<?php

use App\Http\Controllers\PawnsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/pawns/create');

Route::get('/pawns/create', [PawnsController::class, 'create'])->name('pawns.create');
Route::post('/pawns', [PawnsController::class, 'store'])->name('pawns.store');
