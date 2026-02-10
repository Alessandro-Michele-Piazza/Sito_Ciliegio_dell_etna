<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
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
    public function index(Request $request)
    {
        $tag = $request->query('tag');
        $search = $request->query('q');
        $year = $request->query('year');
        $query = Post::with('tags')->latest();

        if (!empty($tag)) {
            $query->whereHas('tags', function ($tagsQuery) use ($tag) {
                $tagsQuery->where('slug', $tag)->orWhere('name', $tag);
            });
        }

        if (!empty($search)) {
            $query->where(function ($searchQuery) use ($search) {
                $searchQuery->where('title', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        if (!empty($year)) {
            $query->whereYear('created_at', $year);
        }

        $posts = $query->get();
        $tags = Tag::withCount('posts')
            ->having('posts_count', '>', 0)
            ->orderBy('name')
            ->get();
        $years = Post::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderByDesc('year')
            ->pluck('year');

        return view('blog.index', compact('posts', 'tag', 'search', 'year', 'tags', 'years'));
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
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'tags' => 'nullable|string|max:255'
        ]);

        $post = new Post();
        $cleanTitle = html_entity_decode($request->title);

        $post->title = $cleanTitle;
        $post->slug = $this->generateUniqueSlug($cleanTitle);
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $post->image = $this->storeWebp($request->file('image'));
        }

        $post->save();

        $this->syncTags($post, $request->input('tags'));

        $this->cleanOldPosts();

        return redirect()->route('blog.index')->with('success', 'Post creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $blog)
    { // Laravel usa l'ID automaticamente
        $blog->load('tags');
        // Se non c'è un valore o il file non esiste in storage pubblico,
        // usiamo il placeholder presente in storage/app/public/media/placeholder.webp
        if (empty($blog->image) || !Storage::disk('public')->exists($blog->image)) {
            $blog->image = 'media/placeholder.webp';
        }

        return view('blog.show', ['post' => $blog]);
    }

    private function cleanOldPosts()
    {
        $max = 100;
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
        $blog->load('tags');
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
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'tags' => 'nullable|string|max:255'
        ]);

        $cleanTitle = html_entity_decode($request->title);

        $blog->title = $cleanTitle;
        $blog->slug = $this->generateUniqueSlug($cleanTitle, $blog->id);
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $this->storeWebp($request->file('image'));
        }

        $blog->save();

        $this->syncTags($blog, $request->input('tags'));

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

    private function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $suffix = 1;

        while (Post::where('slug', $slug)
            ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $suffix++;
            $slug = $baseSlug . '-' . $suffix;
        }

        return $slug;
    }

    private function syncTags(Post $post, ?string $rawTags): void
    {
        if ($rawTags === null) {
            $post->tags()->sync([]);
            return;
        }

        $names = collect(explode(',', $rawTags))
            ->map(fn($tag) => trim($tag))
            ->filter();

        $tagIds = $names->map(function ($name) {
            $slug = Str::slug($name);
            if ($slug === '') {
                return null;
            }

            $tag = Tag::firstOrCreate(
                ['slug' => $slug],
                ['name' => $name]
            );

            return $tag->id;
        })->filter()->values();

        $post->tags()->sync($tagIds);
    }
}
