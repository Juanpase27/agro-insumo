<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // Relacion muchos a muchos
    public function product_supply()
    {
        return $this->belongsToMany(Supplies::class);
    }

    // Relacion muchos a uno
    public function productCategories()
    {
        return $this->belongsTo(ProductCategories::class);
    }

    
    
}
