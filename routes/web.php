<?php

use App\Http\Controllers\PawnsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/pawns/create');

Route::get('/pawns/create', [PawnsController::class, 'create']);
