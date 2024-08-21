<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    //index del cliente
    public function index()
    {
        $products = Producto::all();
        return view('Productos.products', compact('products'));
    }
    //para mostrar lo que hay en el carrito
    public function cart()
    {
        return view('Productos.cart');
    }
    //pa añadir productos al carrito
    public function addToCart($id)
    {
        $product = Producto::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "nombre" => $product->nombre,
                "descripcion" => $product->descripcion,
                "precio" => $product->precio,
                "image" => $product->image,
                "extra" => $product->extra,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto añadido al carrito exitosamente!');
    }
    //para actualizar las cantidades y precios DEL CARRITO
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Carrito actualizado exitosamente!');
        }
    }
    //para ELIMINAR PRODUCTOS DEL CARRITOS
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Producto removido exitosamente!');
        }
    }
    /**
     * INDEX DEL ADMIN
     */
    public function index1()
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
        return redirect()->action([ProductoController::class, 'index1']);
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
     * para actualizar DATOS DEL PRODUCTO
     */
    public function update1(Request $request, string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->sabor = $request->sabor;
        $producto->foto = $request->foto;
        $producto->id_categoria = $request->id_categoria;
        $producto->save();
        return redirect()->action([ProductoController::class, 'index1']);
    }

    /**
     * para eliminar PRODUCTO
     */
    public function destroy(string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->action([ProductoController::class, 'index1']);
    }
}
