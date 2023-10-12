<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // Relacion uno a muchos
    public function products(){
        return $this->hasMany(Products::class);
    }
}
