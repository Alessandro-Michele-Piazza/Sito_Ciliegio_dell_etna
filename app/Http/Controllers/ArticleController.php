<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::find(1);
        // dd($article); 
        return view('menu_domenicale', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $article = Article::findOrFail(1);
        // Togli "admin." se il file è direttamente in resources/views
        return view('edit-article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $article = Article::findOrFail(1);

        $request->validate([
            'title'           => 'required|string|max:255',
            'body'            => 'required',
            'authors'         => 'nullable|string',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_secondary' => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Nuova validazione
        ]);

        $article->title = $request->title;
        $article->body = $request->body;
        $article->authors = $request->authors;

        // Gestione Immagine 1 (Principale)
        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $article->image = $request->file('image')->store('articles', 'public');
        }

        // Gestione Immagine 2 (Secondaria)
        if ($request->hasFile('image_secondary')) {
            // Se l'admin carica una nuova immagine, eliminiamo quella vecchia dal server
            if ($article->image_secondary) {
                Storage::disk('public')->delete($article->image_secondary);
            }
            $article->image_secondary = $request->file('image_secondary')->store('articles', 'public');
        }

        $article->save();

        return redirect()->route('menu_domenicale')->with('success', 'Menù aggiornato!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
