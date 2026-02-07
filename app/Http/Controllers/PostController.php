<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
        $cleanTitle = html_entity_decode($request->title);

        $post->title = $cleanTitle;
        $post->slug = Str::slug($cleanTitle);
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $post->image = $this->storeWebp($request->file('image'));
        }

        $post->save();

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

        $cleanTitle = html_entity_decode($request->title);

        $blog->title = $cleanTitle;
        $blog->slug = Str::slug($cleanTitle);
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $this->storeWebp($request->file('image'));
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

    private function storeWebp($file): string
    {
        $manager = new ImageManager(new Driver());
        $image = $manager->read($file->getPathname());
        $encoded = $image->toWebp(80); // qualità 0-100

        $filename = 'blog_images/' . Str::uuid() . '.webp';
        Storage::disk('public')->put($filename, $encoded);

        return $filename;
    }
}
