<?php

namespace App\Http\Controllers;

use App\Models\MenuPizzeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuPizzeriaController extends Controller
{
    // 1. Mostra il menu al pubblico
    public function show()
    {
        $menu = MenuPizzeria::first();
        return view('menu_pizzeria', compact('menu'));
    }

    // 2. Mostra la pagina di caricamento (Admin)
    public function edit()
    {
        $menu = MenuPizzeria::first();
        return view('menu_pizzeria_edit', compact('menu'));
    }

    // 3. Salva il nuovo PDF ed elimina quello vecchio
    public function update(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:10000', // Max 10MB
        ]);

        $menu = MenuPizzeria::first() ?? new MenuPizzeria();

        if ($request->hasFile('pdf_file')) {
            // Se esiste già un vecchio file, lo cancelliamo dal disco
            if ($menu->pdf_path && Storage::disk('public')->exists($menu->pdf_path)) {
                Storage::disk('public')->delete($menu->pdf_path);
            }

            // Carichiamo il nuovo file nella cartella 'uploads/menu'
            $path = $request->file('pdf_file')->store('uploads/menu', 'public');

            $menu->pdf_path = $path;
            $menu->save();
        }

        return redirect()->back()->with('success', 'Menù aggiornato con successo!');
    }
}
