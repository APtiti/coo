<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'nota', 'subtotal'];
    protected $hidden = ['id'];

    public function producto(){
        // relaccion de muchos a muchos producto y pedido nace detalle_pedidos colocar belongsToMany
        return $this->belongsToMany(Pedido::class,'detalle_pedidos');
    }

    public function factura(){
        return $this->belongsTo(Factura::class);
    }
}
