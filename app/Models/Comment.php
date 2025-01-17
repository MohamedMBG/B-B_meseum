<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    // Champs autorisés pour l'assignation
    protected $fillable = ['user_id', 'content'];

    // Relation "belongsTo" avec le modèle User : un commentaire est écrit par un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class); // Each comment is written by a user
    }

}
