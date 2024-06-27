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
        return $this->belongsTo(Pedido::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
