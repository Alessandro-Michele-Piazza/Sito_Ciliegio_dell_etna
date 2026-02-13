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

    public function ristorazione()
    {
        return view('ristorazione');
    }

    public function menu_domenicale()
    {
        return view('menu_domenicale');
    }

    public function esperienze()
    {
        return view('esperienze');
    }

    public function winetour()
    {
        return view('wine_tour');
    }

    
    public function corso_pizzeria()
    {
        return view('corso_pizzeria');
    }

    public function corso_cucina()
    {
        return view('corso_cucina');
    }

    public function setLanguage($lang)
    {
        // Verifichiamo che la lingua sia tra quelle ammesse
        if (in_array($lang, ['it', 'en', 'es', 'fr', 'de'])) {
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }

}
