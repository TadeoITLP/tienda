<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Producto;

class ProductoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_masNuevos()
    {
        $productos = Producto::masNuevos();
        $this->assertTrue($productos->count()==4);
    }

    public function test_masVendidos()
    {
        $this->assertTrue(true);
    }

    public function test_porCategoria()
    {
        $this->assertTrue(true);
    }
}
