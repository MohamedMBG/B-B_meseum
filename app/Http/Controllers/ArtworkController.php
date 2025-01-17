<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Categorie;

class ArtworkController extends Controller
{
    //cette fonction permet aux utilisateurs de voir tous les arts de tous les artistes
    public function showArtworks()
    {
        $artworks = artwork::all();
        return view('gallery', ["artworks" => $artworks]);
    }

    // on va ustiliser cette fonction pour l'affichage des categories dans les options ( dans la page pour uploader un art )
    public function create()
    {
        $categories = Categorie::all(); 
        return view('upload', compact('categories'));
    }

    // store fonciton on va l'utiliser dna sle form pour uploader une oeuvre 
    public function store(Request $request)
    {
        // la validation des informations
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dimensions' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        // sauvegarder l'image dans le path storage/public
        $imagePath = $request->file('image')->store('artworks', 'public');

        // Creer un nouveau record des artwork
        \App\Models\Artwork::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'dimensions' => $request->dimensions,
            'user_id' => session('logged_in_user')->id, // on va avoir l'id d'utilisateir qui a uploader l'oeuvre depuis la session
            'category_id' => $request->category_id,
        ]);

        // la redirection avec un message de success
        return redirect()->route('upload.form')->with('succes', 'oeuvre uploader avec succes!');
    }
}
