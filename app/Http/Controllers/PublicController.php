<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function stanze()
    {
        return view('stanze');
    }

    public function pizzeria()
    {
        return view('pizzeria');
    }

    public function ristorante()
    {
        return view('ristorante');
    }

    public function setLanguage($lang)
    {
        // Verifichiamo che la lingua sia tra quelle ammesse
        if (in_array($lang, ['it', 'en', 'es'])) {
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
