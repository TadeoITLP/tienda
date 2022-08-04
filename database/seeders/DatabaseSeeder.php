<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PDO;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CategoriasSeeder::class,
                    ProductosSeeder::class,
                    ClientesSeeder::class,
                    PromocionsSeeder::class,
                    ProveedorsSeeder::class,
                    PedidosSeeder::class]);
                    //PedidosDetallesSeeder::class]);

    }
}
