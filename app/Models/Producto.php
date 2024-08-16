<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre','sabor','foto','id_categoria'];
    protected $hidden = ['id'];
    public function pedido(){
        // relaccion de muchos a muchos producto y pedido nace detalle_pedidos colocar belongsToMany
        return $this->belongsToMany(Pedido::class,'detalle_pedidos');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
