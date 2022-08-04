<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cliente;

class productoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_principal()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_alta_productos_formulario()
    {
        $cliente=Cliente::all()->first();
        $response=$this->withSession(['cliente'=>$cliente])->get('/altaProductos/formulario');
        $response = $this->get('/altaProductos/formulario');
        $response->assertStatus(200);
    }
    public function test_login_formularios()
    {
        $response = $this->get('/login/formulario');
        $response->assertStatus(200);
    }
}
