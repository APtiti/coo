<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['numero','fecha', 'nota', 'estado', 'cliente'];
    protected $hidden = ['id'];

    public function productos(){
        return $this->belongsToMany(Pedido::class,'detalle_pedidos','id');
    }

    public function detalles()
     {
         return $this->hasMany(Detalle_pedido::class, 'id_pedido');
     }
     
    public function facturas(){
        return $this->belongsTo(Factura::class);
    }

}
