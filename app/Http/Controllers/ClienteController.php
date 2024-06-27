<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(){
        $silla = Cliente::all();
        //dd($variable);
        return view ('Clientes.cliente',['silla'=>$silla]);
    }
    public function show($id){
        $cliente = Cliente::findOrFail($id);
        return view('Clientes.cliente_ver', ['cliente'=>$cliente]);
    }
    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->action([ClienteController::class, 'index']);
    }
    public function create(){
        return view('Clientes.cliente_crear');
    }
    public function store(Request $request){
        $cliente=new Cliente($request->all());
        $cliente->save();
        return redirect()->action([ClienteController::class, 'index']);
    }
    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('Clientes.cliente_editar',['cliente'=>$cliente]);
    }
    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->nombre;
        $cliente->edad = $request->edad;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->action([ClienteController::class, 'index']);
    }
}
