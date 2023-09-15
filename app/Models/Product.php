<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    // protected $fillable = ['id', 'name', 'description', 'slug'];
    // Se usa para cuando se quiere proteger un campo, evita su manipulación y permite todos los que no estén dentro del arreglo
    protected $guarded = [];
    
    /**
     * El tema de las url's amigables está bien, el problema es que al menos para producto, es contraproducente, debido a que chocará con productos del mismo nombre y mostrará consultas erroneas
    public function getRouteKeyName()
    {
        return 'slug';
    }
    */


    
}
