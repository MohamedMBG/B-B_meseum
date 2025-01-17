<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'password', 'profile_image', 'phone'];

    public function artworks()
    {
        return $this->hasMany(Artwork::class); // A user can have many artworks
    }
    
}
