<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }

    public function detalle()
    {
        return $this->hasMany(PedidosDetalle::class);
    }

    public function getTotalAttribute()
    {
        $total = 0;
        foreach ($this->detalle as $detalle) {
            $total += $detalle->cantidad * $detalle->precio_unitario;
        }
        return $total;
    }
}
