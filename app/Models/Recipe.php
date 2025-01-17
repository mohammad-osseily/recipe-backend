<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ingredients', 'steps', 'description', 'image'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



}
