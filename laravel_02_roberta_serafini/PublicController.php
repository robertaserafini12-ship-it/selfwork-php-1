<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Array simulato di articoli del blog
    private $articles = [
        [
            'id' => 1,
            'title' => 'Introduzione al Gaming su PC',
            'category' => 'Gaming',
            'description' => 'Tutto quello che c è da sapere per assemblare la tua prima build da gaming.',
            'content' => 'Qui va il contenuto completo del primo articolo...'
        ],
        [
            'id' => 2,
            'title' => 'I migliori giochi Indie del 2026',
            'category' => 'Recensioni',
            'description' => 'Una selezione delle migliori gemme indipendenti uscite quest anno.',
            'content' => 'Qui va il contenuto completo del secondo articolo...'
        ],
        [
            'id' => 3,
            'title' => 'Guida alle periferiche e monitor',
            'category' => 'Hardware',
            'description' => 'Come scegliere la tastiera meccanica e il monitor a 144Hz ideale.',
            'content' => 'Qui va il contenuto completo del terzo articolo...'
        ],
    ];

    public function homepage()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = ['Recensioni Hardware', 'Guide e Tutorial', 'Notizie Gaming'];
        return view('services', ['services' => $services]);
    }

    public function articles()
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    // Rotta parametrica: riceve l'ID dall'URL e recupera il singolo articolo
    public function showArticle($id)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return view('articles.show', ['article' => $article]);
            }
        }

        // Se l'ID non esiste, restituisce pagina 404
        abort(404);
    }
}