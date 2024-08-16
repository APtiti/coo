<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $facturas=Factura::all();
        return view('Facturas.factura',['factura'=>$facturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Facturas.factura_crear');
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
