<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'facturas';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'total', 'nit','id_pedido','id_cliente'];
    protected $hidden = ['id'];
    public function pedido(){
        return $this->belongsTo(Pedido::class);
    } 
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    } 
}
