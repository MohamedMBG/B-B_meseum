<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ["name"];
    // Définition d'une relation Eloquent "hasMany".
    // Cette méthode indique qu'une catégorie peut contenir plusieurs œuvres d'art (artworks).
    // La relation est définie avec le modèle Artwork.
    public function artworks()
    {
        // Retourne une instance de la relation "hasMany".
        // Cela signifie qu'une catégorie peut avoir plusieurs œuvres d'art associées.
        return $this->hasMany(Artwork::class);
    }
}
