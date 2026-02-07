<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'image_secondary' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $article->title = $request->title;
        $article->body = $request->body;
        $article->authors = $request->authors;

        // Immagine 1 (Principale) -> WebP
        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $article->image = $this->storeWebp($request->file('image'), 'articles');
        }

        // Immagine 2 (Secondaria) -> WebP
        if ($request->hasFile('image_secondary')) {
            if ($article->image_secondary) {
                Storage::disk('public')->delete($article->image_secondary);
            }
            $article->image_secondary = $this->storeWebp($request->file('image_secondary'), 'articles');
        }

        $article->save();

        return redirect()->route('menu_domenicale')->with('success', 'Menù aggiornato!');
    }

    private function storeWebp($file, string $dir): string
    {
        $manager = new ImageManager(new Driver());
        $image = $manager->read($file->getPathname());
        $encoded = $image->toWebp(80);

        $filename = $dir . '/' . Str::uuid() . '.webp';
        Storage::disk('public')->put($filename, $encoded);

        return $filename;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
