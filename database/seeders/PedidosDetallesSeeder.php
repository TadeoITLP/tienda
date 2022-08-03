<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PedidosDetalles;
class PedidosDetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PedidosDetalles::factory()->count(500)->create();
    }
}
