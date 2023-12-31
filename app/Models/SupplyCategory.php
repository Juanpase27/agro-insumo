<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyCategory extends Model
{
    use HasFactory;
    
    protected $table = "supply_categories";
    protected $guarded = [];
}
