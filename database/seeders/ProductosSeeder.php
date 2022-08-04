<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = Categoria::all();
        $productos = Producto::factory()->count(500)->make();
        foreach ($productos as $producto) {
            $producto->categoria_id = $categorias[rand(0,$categorias->count()-1)]->id;
            $producto->save();
        }
        //
    }
}
