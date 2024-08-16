<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes=Cliente::all();
        return view('Clientes.cliente',['cliente'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Clientes.cliente_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente=new Cliente($request->all());
        $cliente->save();
        return redirect()->action([ClienteController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        return view('Clientes.cliente_ver',['cliente'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        return view('Clientes.cliente_editar',['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->action([ClienteController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->action([ClienteController::class, 'index']);
    }
}
