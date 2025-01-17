<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Categorie;

class ArtworkController extends Controller
{
    public function showArtworks()
    {
        $artworks = artwork::all();
        return view('gallery', ["artworks" => $artworks]);
    }

    public function create()
    {
        $categories = Categorie::all(); // Fetch all categories for the dropdown
        return view('upload', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dimensions' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Store the uploaded image in the public storage
        $imagePath = $request->file('image')->store('artworks', 'public');

        // Create a new artwork record in the database
        \App\Models\Artwork::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'dimensions' => $request->dimensions,
            'user_id' => session('logged_in_user')->id, // Assuming user ID is stored in the session
            'category_id' => $request->category_id,
        ]);

        // Redirect back with a success message
        return redirect()->route('upload.form')->with('success', 'Artwork uploaded successfully!');
    }
}
