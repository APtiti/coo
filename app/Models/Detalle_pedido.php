<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_pedido extends Model
{
    use HasFactory;
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pedido','id_producto','cantidad', 'total'];
    protected $hidden = ['id'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id');
    }
}
