<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = ['title', 'description', 'image_path', 'dimensions', 'user_id', 'category_id'];
    public function user()
    {
        return $this->belongsTo(User::class); // Each artwork belongs to a user
    }

    // Define the relationship with the Category (1:N) - One category can have many artworks
    public function category()
    {
        return $this->belongsTo(Categorie::class); // Each artwork belongs to a category
    }

    // Define the relationship with the Comment (1:N) - One artwork can have many comments
    public function comments()
    {
        return $this->hasMany(Comment::class); // Each artwork can have many comments
    }
}
