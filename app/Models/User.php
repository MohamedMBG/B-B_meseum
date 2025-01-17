<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Champs autorisés pour l'assignation
    protected $fillable = ['nom', 'prenom', 'email', 'password', 'profile_image', 'phone'];

    // Relation "hasMany" avec le modèle Artwork : un utilisateur peut avoir plusieurs œuvres d'art
    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
    
}
