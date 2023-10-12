<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relacion muchos a uno
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relacion muchos a uno
    public function productCategories(){
        return $this->belongsTo(ProductCategories::class);
    }

    //Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
