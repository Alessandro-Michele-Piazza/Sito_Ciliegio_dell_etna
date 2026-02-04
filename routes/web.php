<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuPizzeriaController;

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


//ROTTE PER IL BLOG

// Rotte PUBBLICHE (Tutti possono vedere la lista e il dettaglio)
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/articolo/{blog}', [PostController::class, 'show'])->name('blog.show');

// Rotte PROTETTE (Solo chi è loggato con Fortify può creare, modificare o eliminare)
Route::middleware(['auth'])->group(function () {
    Route::get('/blog/crea', [PostController::class, 'create'])->name('blog.create');
    Route::post('/blog/salva', [PostController::class, 'store'])->name('blog.store');
    Route::get('/blog/modifica/{blog}', [PostController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/aggiorna/{blog}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/blog/elimina/{blog}', [PostController::class, 'destroy'])->name('blog.destroy');
});

//ROTTE PIZZERIA

// Area riservata (Admin) - protetta dal middleware di Fortify
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/menu-pizzeria/edit', [MenuPizzeriaController::class, 'edit'])->name('menu_pizzeria_edit');
    Route::post('/admin/menu-pizzeria/update', [MenuPizzeriaController::class, 'update'])->name('menu_pizzeria_update');
});

Route::get('/apri-menu-pdf', function () {
    $menu = \App\Models\MenuPizzeria::first();
    if ($menu) {
        return redirect(asset('storage/' . $menu->pdf_path));
    }
    return redirect()->back()->with('error', 'Menu non trovato');
})->name('apri_menu_diretto');
