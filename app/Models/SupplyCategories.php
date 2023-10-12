<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyCategories extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function supplies()
    {
        return $this->hasMany(Supplies::class);
    }
}
