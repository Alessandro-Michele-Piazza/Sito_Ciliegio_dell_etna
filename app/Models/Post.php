<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    /**
     * I campi che possono essere scritti massivamente.
     * Senza questo, il metodo Post::create() o $post->save() 
     * potrebbe bloccare i dati per sicurezza.
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Il metodo "booted" viene richiamato automaticamente da Laravel.
     * Lo usiamo per agganciare degli "eventi" al ciclo di vita del modello.
     */
    protected static function booted()
    {
        /**
         * Evento "deleting": viene eseguito UN ISTANTE PRIMA 
         * che il record venga rimosso dal database.
         */
        static::deleting(function ($post) {
            // Se il post ha un percorso immagine salvato...
            if ($post->image) {
                // ...elimina il file fisico dalla cartella storage/app/public/blog_images
                Storage::disk('public')->delete($post->image);
            }
        });
    }
}
