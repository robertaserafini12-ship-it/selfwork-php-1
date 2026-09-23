<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('home');

// Chi siamo
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');

// Servizi
Route::get('/servizi', [PublicController::class, 'services'])->name('services');

// Elenco Articoli
Route::get('/articoli', [PublicController::class, 'articles'])->name('articles.index');

// Dettaglio Articolo (Rotta Parametrica con parametro obbligatorio {id})
Route::get('/articolo/{id}', [PublicController::class, 'showArticle'])->name('articles.show');