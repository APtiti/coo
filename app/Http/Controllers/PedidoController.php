<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

use App\Models\Producto;
use App\Models\Detalle_pedido;// tabla detalle pedido

use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pedidos=Pedido::all();
        return view('Pedidos.pedido',['pedido'=>$pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // obtenemos todos los productos para ingresar un pedido
        $producto=Producto::all();
        return view('Pedidos.pedido_crear',['productos'=>$producto]);

  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      

        //
        try { //metodo hacer las transaciones si ocurre un error 

            DB::beginTransaction(); //para realizar la transacion

        $pedido=new Pedido($request->all());
        $pedido->save();

        // tabla detalle 
        $id_producto = $request->get('id_producto');
        $cantidad= $request->get('cantidad');
        $precio= $request->get('precio');
        $id_topping="1";//get('id_topping ');	


        $cont=0;

        while($cont<count($id_producto)){

            $detalle= new Detalle_pedido;
            $detalle->id_pedido=$pedido->id;
            $detalle->id_producto=$id_producto[$cont];
            $detalle->cantidad=$cantidad[$cont];
            $detalle->precio=$precio[$cont];
            $detalle->id_topping=$id_topping;
            $detalle->save();

            $cont=$cont+1;
            
        } 
         
        DB::commit();


       
        
    } catch(\Exception $e){
        DB::rollback(); // si ocurre error hace un rollback de esa transacion
    }

    return redirect()->action([PedidoController::class, 'index']);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pedido = Pedido::findOrFail($id);
        return view('Pedidos.pedido_ver',['pedido'=>$pedido]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pedido = Pedido::findOrFail($id);
        return view('Pedidos.pedido_editar',['pedido'=>$pedido]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pedido = Pedido::findOrFail($id);
        $pedido->fecha = $request->fecha;
        $pedido->nota = $request->nota;
        $pedido->subtotal = $request->subtotal;
        $pedido->save();
        return redirect()->action([PedidoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->action([PedidoController::class, 'index']);
    }
}
