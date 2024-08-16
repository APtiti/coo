<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $producto = DB::table('productos')
        ->select('productos.id','productos.nombre','productos.sabor','productos.foto', 'categorias.nombre as categoria')
        ->leftJoin('categorias', 'categorias.id', '=', 'productos.id_categoria')
        ->get();
        //dd($producto);
        return view('Productos.producto',['productos'=>$producto]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('Productos.producto_crear',['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto=new Producto($request->all());
        $producto->save();
        return redirect()->action([ProductoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('Productos.producto_ver',['producto'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('Productos.producto_editar',['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->sabor = $request->sabor;
        $producto->foto = $request->foto;
        $producto->id_categoria = $request->id_categoria;
        $producto->save();
        return redirect()->action([ProductoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->action([ProductoController::class, 'index']);
    }
}
