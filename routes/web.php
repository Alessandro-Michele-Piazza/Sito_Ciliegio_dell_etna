<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuPizzeriaController;

Route::get('/', [PublicController::class, 'home'])->name("home");
Route::get('/Contatti', [PublicController::class, 'contatti'])->name("contatti");
Route::post('/Contatti/invio', [ContactController::class, 'send'])->name('contact.send');
Route::get('/Camere', [PublicController::class, 'stanze'])->name("stanze");
Route::get('/Pizzeria', [PublicController::class, 'pizzeria'])->name("pizzeria");
Route::get('/Ristorante', [PublicController::class, 'ristorante'])->name("ristorante");
Route::post('/Lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
Route::get('/Menu_domenicale', [ArticleController::class, 'index'])->name('menu_domenicale');
Route::get('/Esperienze', [PublicController::class, 'esperienze'])->name("esperienze");
Route::get('/Wine_tour', [PublicController::class, 'winetour'])->name("winetour");



// Rotta registrazione per uri segreta:
Route::get('/area-segreta-registrazione-123', function () {
    return view('auth.register'); // La tua vista della registrazione
})->name('register');
Route::post('/area-segreta-registrazione-123', [Laravel\Fortify\Http\Controllers\RegisteredUserController::class, 'store']);


// Rotte protette (bisogna essere loggati)
Route::middleware(['auth'])->group(function () {
    Route::get('/Menu_domenicale/modifica', [ArticleController::class, 'edit'])->name('menu.edit');
    Route::put('/Menu_domenicale/aggiorna', [ArticleController::class, 'update'])->name('menu.update');
});


//ROTTE PER IL BLOG

// Rotte PUBBLICHE (Tutti possono vedere la lista e il dettaglio)
Route::get('/Blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/Blog/articolo/{blog}', [PostController::class, 'show'])->name('blog.show');

// Rotte PROTETTE (Solo chi è loggato con Fortify può creare, modificare o eliminare)
Route::middleware(['auth'])->group(function () {
    Route::get('/Blog/crea', [PostController::class, 'create'])->name('blog.create');
    Route::post('/Blog/salva', [PostController::class, 'store'])->name('blog.store');
    Route::get('/Blog/modifica/{blog}', [PostController::class, 'edit'])->name('blog.edit');
    Route::put('/Blog/aggiorna/{blog}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/Blog/elimina/{blog}', [PostController::class, 'destroy'])->name('blog.destroy');
});

//ROTTE PIZZERIA

// Area riservata (Admin) - protetta dal middleware di Fortify
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/Menu-pizzeria/edit', [MenuPizzeriaController::class, 'edit'])->name('menu_pizzeria_edit');
    Route::post('/admin/Menu-pizzeria/update', [MenuPizzeriaController::class, 'update'])->name('menu_pizzeria_update');
});

Route::get('/Apri-Menu-PDF', function () {
    $menu = \App\Models\MenuPizzeria::first();
    if ($menu) {
        return redirect(asset('storage/' . $menu->pdf_path));
    }
    return redirect()->back()->with('error', 'Menu non trovato');
})->name('apri_menu_diretto');
