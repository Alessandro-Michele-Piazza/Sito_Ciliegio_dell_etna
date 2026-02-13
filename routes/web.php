<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuPizzeriaController;
use App\Models\Post;

// Intercetta URL con prefisso lingua come /it/contatti
// Limita il placeholder `lang` ai codici linguistici per non intercettare tutte le URI.
Route::get('{lang}/{any?}', function ($lang, $any = null) {
    if (in_array($lang, ['it', 'en', 'es', 'fr'])) {
        session(['locale' => $lang]);
        $target = $any ? '/' . $any : '/';
        return redirect($target);
    }
    return abort(404);
})->where('lang', 'it|en|es|fr')->where('any', '.*');
Route::get('/', [PublicController::class, 'home'])->name("home");
Route::get('/sitemap.xml', function () {
    $today = now()->toDateString();
    $urls = [
        [
            'loc' => route('home'),
            'lastmod' => $today,
            'changefreq' => 'weekly',
            'priority' => '1.0',
        ],
        [
            'loc' => route('contatti'),
            'lastmod' => $today,
            'changefreq' => 'yearly',
            'priority' => '0.6',
        ],
        [
            'loc' => route('stanze'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ],
        [
            'loc' => route('ristorazione'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ],
        [
            'loc' => route('menu_domenicale'),
            'lastmod' => $today,
            'changefreq' => 'weekly',
            'priority' => '0.7',
        ],
        [
            'loc' => route('esperienze'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.7',
        ],
        [
            'loc' => route('eventi'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.7',
        ],
        [
            'loc' => route('winetour'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.7',
        ],
        [
            'loc' => route('corso_pizzeria'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.6',
        ],
        [
            'loc' => route('corso_cucina'),
            'lastmod' => $today,
            'changefreq' => 'monthly',
            'priority' => '0.6',
        ],
        [
            'loc' => route('blog.index'),
            'lastmod' => $today,
            'changefreq' => 'weekly',
            'priority' => '0.7',
        ],
    ];

    $posts = Post::query()->select(['slug', 'updated_at'])->get();
    foreach ($posts as $post) {
        $urls[] = [
            'loc' => route('blog.show', $post->slug),
            'lastmod' => optional($post->updated_at)->toDateString() ?? $today,
            'changefreq' => 'monthly',
            'priority' => '0.6',
        ];
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . htmlspecialchars($url['loc'], ENT_XML1) . '</loc>';
        $xml .= '<lastmod>' . htmlspecialchars($url['lastmod'], ENT_XML1) . '</lastmod>';
        $xml .= '<changefreq>' . htmlspecialchars($url['changefreq'], ENT_XML1) . '</changefreq>';
        $xml .= '<priority>' . htmlspecialchars($url['priority'], ENT_XML1) . '</priority>';
        $xml .= '</url>';
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
Route::get('/contatti', [PublicController::class, 'contatti'])->name("contatti");
Route::post('/contatti/invio', [ContactController::class, 'send'])->name('contact.send');
Route::get('/camere', [PublicController::class, 'stanze'])->name("stanze");
Route::get('/ristorazione', [PublicController::class, 'ristorazione'])->name("ristorazione");

// Redirect vecchi URL per SEO
Route::get('/pizzeria', fn() => redirect()->route('ristorazione', [], 301))->name('pizzeria');
Route::get('/ristorante', fn() => redirect()->route('ristorazione', [], 301))->name('ristorante');
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
Route::get('/menu_domenicale', [ArticleController::class, 'index'])->name('menu_domenicale');
Route::get('/esperienze', [PublicController::class, 'esperienze'])->name("esperienze");
Route::get('/eventi', [PublicController::class, 'eventi'])->name("eventi");
Route::get('/wine_tour', [PublicController::class, 'winetour'])->name("winetour");
Route::get('/corso_pizzeria', [PublicController::class, 'corso_pizzeria'])->name("corso_pizzeria");
Route::get('/corso_cucina', [PublicController::class, 'corso_cucina'])->name("corso_cucina");



// Rotta registrazione per uri segreta:
Route::get('/area-segreta-registrazione-123', function () {
    return view('auth.register'); // La tua vista della registrazione
})->name('register');
Route::post('/area-segreta-registrazione-123', [Laravel\Fortify\Http\Controllers\RegisteredUserController::class, 'store']);


// Rotte protette (bisogna essere loggati)
Route::middleware(['auth'])->group(function () {
    Route::get('/menu_domenicale/modifica', [ArticleController::class, 'edit'])->name('menu.edit');
    Route::put('/menu_domenicale/aggiorna', [ArticleController::class, 'update'])->name('menu.update');
});


//ROTTE PER IL BLOG

// Rotte PUBBLICHE (Tutti possono vedere la lista e il dettaglio)
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/articolo/{blog:slug}', [PostController::class, 'show'])->name('blog.show');

// Rotte PROTETTE (Solo chi è loggato con Fortify può creare, modificare o eliminare)
Route::middleware(['auth'])->group(function () {
    Route::get('/blog/crea', [PostController::class, 'create'])->name('blog.create');
    Route::post('/blog/salva', [PostController::class, 'store'])->name('blog.store');
    Route::get('/blog/modifica/{blog:slug}', [PostController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/aggiorna/{blog:slug}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/blog/elimina/{blog:slug}', [PostController::class, 'destroy'])->name('blog.destroy');
});

//ROTTE PIZZERIA

// Area riservata (Admin) - protetta dal middleware di Fortify
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/menu-pizzeria/edit', [MenuPizzeriaController::class, 'edit'])->name('menu_pizzeria_edit');
    Route::post('/admin/menu-pizzeria/update', [MenuPizzeriaController::class, 'update'])->name('menu_pizzeria_update');
});

Route::get('/Apri-Menu-PDF', function () {
    $menu = \App\Models\MenuPizzeria::first();
    if ($menu) {
        return redirect(asset('storage/' . $menu->pdf_path));
    }
    return redirect()->back()->with('error', 'Menu non trovato');
})->name('apri_menu_diretto');
