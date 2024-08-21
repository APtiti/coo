<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Factura;
use App\Models\Pedido;
use App\Models\Cliente;

class FacturaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $factura = DB::table('facturas')
        ->select('facturas.id','facturas.fecha','facturas.total','facturas.nit','clientes.nombre as cliente')
        ->leftJoin('clientes', 'clientes.id', '=', 'facturas.id_cliente')
        ->get();
         //dd($factura);
        return view('Facturas.factura',['factura'=>$factura]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $factura= Cliente::all();
        return view('Facturas.factura_crear',['factura'=>$factura]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $factura=new Factura($request->all());
        $factura->save();
        return redirect()->action([FacturaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $factura = Factura::findOrFail($id);
        return view('Facturas.factura_ver',['factura'=>$factura]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $factura = Factura::findOrFail($id);
        return view('Facturas.factura_editar',['factura'=>$factura]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $factura = Factura::findOrFail($id);
        $factura->fecha = $request->fecha;
        $factura->total = $request->total;
        $factura->nit = $request->nit;
        $factura->save();
        return redirect()->action([FacturaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $factura = Factura::findOrFail($id);
        $factura->delete();
        return redirect()->action([FacturaController::class, 'index']);
    }
}
