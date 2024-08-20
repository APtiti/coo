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
        $categorias = Categoria::all();
        $productos = Producto::with('categoria')->get();
        return view('Productos.producto', ['productos' => $productos, 'categorias' => $categorias]);

        
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
        // Validación del formulario
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Asegúrate de ajustar las restricciones según sea necesario
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|integer',
            'extra' => 'required|string',

        ]);

        $producto = new Producto($request->except('image'));

        if ($request->hasFile('image')) {
            $logoFile = $request->file('image');
            $path = '/img';
            $filename = date('YmdHis') . "." . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path($path), $filename);

            $producto->image = $filename;
        }
        //dd($producto);
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
