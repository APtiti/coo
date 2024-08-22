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
     * MUESTRA TODOS LOS PEDIDOS(SIN SU DETALLE TODAVIA)
     */
    public function index()
    {
        //
        $pedidos=Pedido::all();
        return view('pedidos.pedido',['pedidos'=>$pedidos]);
    }

    /**
     * NO HAY CREATE PQ EL PEDIDO Y DETALLE DE PEDIDO SE CREA AL DARLE PEDIR EN LA VISTA DEL CARRITO
     */
    public function create()
    {
    }

    /**
     * GUARDA EL PEDIDO Y EL DETALLE
     */
    public function store(Request $request)
    {
        // REVISA QUE EL NIT TENGA ENTRE 7 Y 11 DIGITOS
        $validatedData = $request->validate([
            'nit' => 'nullable|integer|min:1000000|max:99999999999',
        ]);
        try {
            DB::beginTransaction();

            // PARA EL NUMERO DE PEDIDO
            $ultimop = Pedido::latest('num_pedido')->first();
            $siguiente = $ultimop ? $ultimop->num_pedido + 1 : 1;

            $pedido = new Pedido([
                'num_pedido' => $siguiente,
                'fecha' => now(), // AUTO ASIGNA LA FECHA ACTUAL
                'estado' => 'Pendiente',
                'direccion' => $request->direccion,
                'nit' => $request->nit,
                'id_user' => auth()->id(),
            ]);
            $pedido->save();

            // Crear detalles del pedido
            $cart = session('cart');
            foreach ($cart as $id => $details) {
                Detalle_pedido::create([
                    'id_pedido' => $pedido->id,
                    'id_producto' => $id,
                    'cantidad' => $details['quantity'],
                    'total' => $details['precio'] * $details['quantity'],
                ]);
            }

            // Limpiar el carrito después de realizar el pedido
            session()->forget('cart');

            DB::commit();
            // Redirige a la vista de detalles del pedido
            return redirect()->route('pedido.show', ['id' => $pedido->id])->with('success', 'Pedido realizado con éxito!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Hubo un error al realizar el pedido. Inténtalo de nuevo.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $pedido = Pedido::with('detalles.producto')->findOrFail($id);
    return view('Pedidos.pedido_ver', ['pedido' => $pedido]);
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
