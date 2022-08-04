<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Producto;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductoTest extends TestCase
{
    use DatabaseTransactions;
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
        $productos = Producto::masVendidos();
        $this->assertTrue($productos->count()<=4);
    }

    public function test_porCategoria()
    {
        $this->assertTrue(true);
    }
}
