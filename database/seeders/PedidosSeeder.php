<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\PedidosDetalle;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = Producto::all();
        $clientes = Cliente::all();
        //echo "0";
        foreach ($clientes as $cliente) {
            //echo "1";
            $pedidos = Pedido::factory()->count(rand(1,10))->make();
            foreach ($pedidos as $pedido) {
                //echo "2";
                $pedido->cliente_id = $cliente->id;
                $pedido->save();
                $detalles = PedidosDetalle::factory()->count(rand(1,10))->make();
                foreach ($detalles as $detalle) {
                    //echo "3";
                    $detalle->pedido_id = $pedido->id;
                    $detalle->producto_id = $productos[rand(0,$productos->count()-1)]->id;
                    $detalle->save();
                }
            }
        }
    }
}
