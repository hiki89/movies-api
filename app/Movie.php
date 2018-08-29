<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'director', 'duration', 'imageUrl', 'releaseDate', 'genre', 
    ];

    public static function search($title) {
        if ($title) {
            return Movie::where('title', 'like','%'.$title.'%')->get();
        }

        return Movie::all();
    }
}
