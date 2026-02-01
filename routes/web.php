<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', [PublicController::class, 'home'])->name("home");
Route::get('/contatti', [PublicController::class, 'contatti'])->name("contatti");
Route::post('/contatti/invio', [ContactController::class, 'send'])->name('contact.send');
Route::get('/camere', [PublicController::class, 'stanze'])->name("stanze");
Route::get('/pizzeria', [PublicController::class, 'pizzeria'])->name("pizzeria");
Route::get('/ristorante', [PublicController::class, 'ristorante'])->name("ristorante");
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
Route::get('/menu_domenicale', [ArticleController::class, 'index'])->name('menu_domenicale');


// Rotta registrazione per uri segreta:
Route::get('/area-segreta-registrazione-123', function () {
    return view('auth.register'); // La tua vista della registrazione
})->name('register');
Route::post('/area-segreta-registrazione-123', [Laravel\Fortify\Http\Controllers\RegisteredUserController::class, 'store']);


// Rotte protette (bisogna essere loggati)
Route::middleware(['auth'])->group(function () {
    Route::get('/menu-domenicale/modifica', [ArticleController::class, 'edit'])->name('menu.edit');
    Route::put('/menu-domenicale/aggiorna', [ArticleController::class, 'update'])->name('menu.update');
});