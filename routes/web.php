<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name("home");
Route::get('/contatti', [PublicController::class, 'contatti'])->name("contatti");
