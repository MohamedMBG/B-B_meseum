<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['user_id', 'content'];
    
    // Define the relationship with the User (N:1) - Many comments can be written by one user
    public function user()
    {
        return $this->belongsTo(User::class); // Each comment is written by a user
    }

    // Define the relationship with the Artwork (N:1) - Many comments can belong to one artwork
    public function artwork()
    {
        return $this->belongsTo(Artwork::class); // Each comment belongs to an artwork
    }
}
