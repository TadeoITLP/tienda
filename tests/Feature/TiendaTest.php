<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Cliente;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function test_principal()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }*/

    public function test_alta_productos_formulario()
    {
        $cliente = Cliente::take(1)->first();
        $response = $this->withSession(['cliente' => $cliente])
            ->get('/altaProductos/formulario');
        $response->assertStatus(200);
    }

    public function test_login_formulario()
    {
        $response = $this->get('/login/formulario');
        $response->assertStatus(200);
    }

    public function test_login()
    {
        $cliente = new Cliente();
        $cliente->nombre = "Tadeo";
        $cliente->direccion = "Conocida";
        $cliente->telefono = "1235415214";
        $cliente->correo = "Tadeo@gmail.com";
        $cliente->password = bcrypt("123");
        $cliente->save();
        $response = $this->post('/login/entrar',
            ['nombre' => $cliente->nombre,'password'=>'123']);
        $response->assertStatus(200);
    }
}
