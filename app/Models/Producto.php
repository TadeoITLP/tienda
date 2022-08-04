<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";

    public static function masNuevos()
    {
        $consulta = Producto::orderBy("created_at","desc")->take(4);
        //return $consulta;
        $productos = $consulta->get();
        return $productos;
    }
    public static function masVendidos() {
        $masVendidos=Producto::select(DB::raw("select productos.id, productos.nombre, productos.precio, sum(pedidos_detalles.cantidad) AS vendidos ".
        "from productos ".
        "inner join pedidos_detalles ".
        "on (productos.id=pedidos_detalles.id) ".
        "group by productos.id, productos.nombre, productos.precio ".
       "order by vendidos desc limit 4)->get()")->get());
        return $masVendidos
    }
    public static function porCategoria() {

    }
}
