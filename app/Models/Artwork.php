<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    // Définition des champs qui peuvent être remplis
    protected $fillable = ['title', 'description', 'image_path', 'dimensions', 'user_id', 'category_id'];
    public function user()
    {
        return $this->belongsTo(User::class); // Each artwork belongs to a user
    }

    // Relation avec le modèle User (N:1) Une œuvre appartient à un seul utilisateur
    public function category()
    {
        return $this->belongsTo(Categorie::class); // Each artwork belongs to a category
    }
}
