<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

Route::get('/', [PublicController::class, 'home'])->name("home");
Route::get('/contatti', [PublicController::class, 'contatti'])->name("contatti");
Route::post('/contatti/invio', [ContactController::class, 'send'])->name('contact.send');
Route::get('/stanze', [PublicController::class, 'stanze'])->name("stanze");
Route::get('/pizzeria', [PublicController::class, 'pizzeria'])->name("pizzeria");
Route::get('/ristorante', [PublicController::class, 'ristorante'])->name("ristorante");
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');