<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;
    protected $table = "toppings";
    protected $primaryKey = "id";
    protected $fillable = ['nombre'];
    protected $hidden = ['id'];
    public function detalle_pedido(){
        return $this->belongsTo(Detalle_pedido::class);
    }
}
