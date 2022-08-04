<?php

namespace Tests\Unit;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;

class ProductoTest extends TestCase
{
=======
use Tests\TestCase;
use App\Models\Producto;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductoTest extends TestCase
{
    use DatabaseTransactions;
>>>>>>> 1b25329feedef07ded4d55a5c00a5385986557e0
    /**
     * A basic unit test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
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
>>>>>>> 1b25329feedef07ded4d55a5c00a5385986557e0
    {
        $this->assertTrue(true);
    }
}
