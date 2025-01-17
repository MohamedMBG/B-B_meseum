<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;


class CategorieController extends Controller
{
    public function uploadArtwork()
    {
        // Fetch all categories from the database
        $categories = Categorie::all();

        // Pass the categories to the view
        return view('upload', ['categories' => $categories]);
    }

    public function submitArtwork(Request $request) {
        
    }
}
