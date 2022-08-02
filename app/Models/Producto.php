<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public static function masNuevos()
    {
        $consulta = Producto::orderBy("created_at","desc")->take(4);
        //return $consulta;
        $productos = $consulta->get();
        return $productos;
    }
}
