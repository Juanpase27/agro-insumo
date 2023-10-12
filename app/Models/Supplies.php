<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{
    use HasFactory;

    // Relacion muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Products::class);
    }

    // Relacion muchos a uno
    public function supplyCategories()
    {
        return $this->belongsTo(SupplyCategories::class);
    }
}
