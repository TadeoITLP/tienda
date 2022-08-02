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
        //return $productos;
        return view("principal",["productosNuevos"=>$productos]);
    }
}
