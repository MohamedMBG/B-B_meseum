<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;


class CategorieController extends Controller
{
    public function uploadArtwork()
    {
        // Récupération de toutes les catégories depuis la base de données
        // La méthode all() est une méthode d'Eloquent qui retourne toutes les entrées
        $categories = Categorie::all();

        // Retourne la vue 'upload' en passant les catégories comme données
        // Les catégories seront accessibles dans la vue sous forme d'un tableau
        return view('upload', ['categories' => $categories]);
    }
}
