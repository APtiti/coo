<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre','descripcion','precio','image','extra','id_categoria'];
    protected $hidden = ['id'];

    public function pedido(){
        return $this->belongsToMany(Pedido::class,'detalle_pedidos', 'id_producto', 'id_pedido');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
