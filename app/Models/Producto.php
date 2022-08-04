<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

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

    public static function masVendidos()
    {
        $masVendidos = Producto::select(DB::raw("productos.id as id, productos.nombre as nombre, productos.precio as precio, sum(pedidos_detalles.cantidad) as vendidos"))
        ->join("pedidos_detalles","producto_id","=","productos.id")
        ->groupBy("productos.id")
        ->groupBy("productos.nombre")
        ->groupBy("productos.precio")
        ->orderBy("vendidos","desc")
        ->take(4)
        ->get();
        /*
        "select productos.id, productos.nombre, productos.precio,".
        " sum(pedidos_detalles.cantidad) as vendidos from productos ".
        " inner join pedidos_detalles".
        " on (producto_id= productos.id)".
        " group by productos.id, productos.nombre, productos.precio".
        " order by vendidos desc limit 4"));*/
        return $masVendidos;
    }

    public static function porCategoria()
    {
        $categorias= Categoria::all();
        $categoria = $categorias[rand(0,$categorias->count()-1)];
        $productos = new Collection();
        return $categoria->productos;
        for ($i=0; $i<4 && $i<$categoria->count(); $i++)
            $productos->push($categoria->productos[$i]);
        return $productos;
    }
}
public static function masVendidos(){


}
public static function porCategoria()
