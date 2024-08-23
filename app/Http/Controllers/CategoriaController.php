<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

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
        // Validación del formulario
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Asegúrate de ajustar las restricciones según sea necesario
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'codigo' => 'required|string',
        ]);

        $categoria = new Categoria($request->except('imagen'));

        if ($request->hasFile('image')) {
            $logoFile = $request->file('image');
            $path = '/img';
            $filename = date('YmdHis') . "." . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path($path), $filename);

            $categoria->image = $filename;
        }

        $categoria->save();

        /*$categoria = Categoria::all();
        return redirect()->route('principal');*/
        return redirect()->action([CategoriaController::class, 'index']);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Asegúrate de ajustar las restricciones según sea necesario
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'codigo' => 'required|string',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->codigo = $request->codigo;
        if ($request->hasFile('image')) {
            $logoFile = $request->file('image');
            $path = '/img';
            $filename = date('YmdHis') . "." . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path($path), $filename);

            $categoria->image = $filename;
        }
        
        $categoria->save();
        //dd($categoria);
        return redirect()->action([CategoriaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria=Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->action([CategoriaController::class,'index']);
    }
}
