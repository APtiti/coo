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
        return $this->belongsTo(Producto::class);
    }
}
