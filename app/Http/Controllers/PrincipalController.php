<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Hash;
use Session;


class PrincipalController extends Controller
{
    public function inicio()
    {
        $usuario = Session::get("cliente");
        $productos = Producto::masNuevos();
        //$productosMasVendidos = Producto::masVendidos();
        //return $productos;
        return view("principal",["productosNuevos"=>$productos,"usuario"=>$usuario]);
                                //*,"productosMasVendidos"=>$productosMasVendidos]);
    }

    public function guardarProducto(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->foto = "img\galleta_animalitos.jpg";
        $producto->save();
        redirect()->back();
    }

    public function login(Request $request)
    {
        //echo "Nombre".$request->usuario;
        $cliente = Cliente::where('nombre',$request->usuario)->get()->first();
        if ($cliente)
        {
            if ( Hash::check($request->password, $cliente->password))
            {
                Session::put("cliente",$cliente);
                //echo "Ok";
                route("inicio");
            }
            else{
                //echo "Error";
                return back()->with('error', 'No usuario o contraseña incorrectos!');
            }
        }
        else
        {
            //echo "Error cliente no existe";
        }
    }
}
