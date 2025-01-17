<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ["name"];
    public function artworks()
    {
        return $this->hasMany(Artwork::class); // A category can contain many artworks
    }
}
