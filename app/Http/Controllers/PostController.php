<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('blog_images', 'public');
        }

        $post->save();

        // LOGICA FIFO: Mantieni solo gli ultimi 15
        $this->cleanOldPosts();

        return redirect()->route('blog.index')->with('success', 'Post creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $blog)
    { // Laravel usa l'ID automaticamente
        return view('blog.show', ['post' => $blog]);
    }

    private function cleanOldPosts()
    {
        $max = 55;
        $count = Post::count();
        if ($count > $max) {
            $toDelete = Post::orderBy('created_at', 'asc')->take($count - $max)->get();
            foreach ($toDelete as $old) {
                $old->delete(); // L'hook nel modello cancellerà anche l'immagine
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $blog) // Cambiato $post in $blog per coerenza con la rotta
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            // Se l'utente carica una nuova immagine, cancelliamo la vecchia dal server
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            // Salviamo la nuova
            $blog->image = $request->file('image')->store('blog_images', 'public');
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Post aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $blog)
    {
        // Se nel Modello Post hai messo l'hook 'deleting' (quello che ti ho dato prima),
        // l'immagine verrà cancellata automaticamente quando chiami delete().
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Post eliminato definitivamente.');
    }
}
