<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_pedido extends Model
{
    use HasFactory;
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pedido','id_producto','cantidad', 'precio','id_topping'];
    protected $hidden = ['id'];
    public function topping(){
        return $this->belongsTo(Topping::class);
    } 
}
