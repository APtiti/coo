<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorias=Categoria::all();
        return view('Categorias.categoria',['categoria'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Categorias.categoria_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $categoria=new Categoria($request->all());
        $categoria->save();
        return redirect()->action([CategoriaController::class, 'index']);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return view('Categorias.categoria_ver',['categoria'=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return view('Categorias.categoria_editar',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->codigo = $request->codigo;
        $categoria->save();
        return redirect()->action([CategoriaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->action([CategoriaController::class, 'index']);
    }
}
