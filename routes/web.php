<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

Route::get('/', [PublicController::class, 'home'])->name("home");
Route::get('/contatti', [PublicController::class, 'contatti'])->name("contatti");
Route::post('/contatti/invio', [ContactController::class, 'send'])->name('contact.send');
Route::get('/stanze', [PublicController::class, 'stanze'])->name("stanze");