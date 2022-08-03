<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class PrincipalController extends Controller
{
    public function inicio()
    {
        $productos = Producto::masNuevos();
        //$productosMasVendidos = Producto::masVendidos();
        //return $productos;
        return view("principal",["productosNuevos"=>$productos]);
                                //*,"productosMasVendidos"=>$productosMasVendidos]);
    }
}
