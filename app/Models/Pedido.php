<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table="pedidos";
    protected $primarykey="id";
    protected $fillable=['num_pedido','fecha','estado','direccion','nit','id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function detalles()
    {
        return $this->hasMany(Detalle_pedido::class, 'id_pedido');
    }

   
}
