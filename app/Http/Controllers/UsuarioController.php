<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rol;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //   Cambio en el atributo contraseña es contrasena
        $usuario = DB::table('usuarios')
        ->select('usuarios.id','usuarios.usuario','usuarios.gmail','usuarios.contrasena', 'roles.nombre as rol')
        ->leftJoin('roles', 'roles.id', '=', 'usuarios.id_rol')
        ->get();
        //dd($usuario);
        return view('Usuarios.usuario',['usuarios'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $usuario= Rol::all();
        return view('Usuarios.usuario_crear',['usuario'=>$usuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario=new Usuario($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(topping $topping)
    {
        //
        $usuario = Usuario::findOrFail($id);
        return view('Usuarios.usuario_ver',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(topping $topping)
    {
        //
        $usuario = Usuario::findOrFail($id);
        $rol=Rol::all();
        return view('Usuarios.usuario_editar',['usuario'=>$usuario,'rol'=>$rol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, topping $topping)
    {
        //
        $usuario = Usuario::findOrFail($id);
        $usuario->usuario = $request->usuario;
        $usuario->gmail = $request->gmail;
        $usuario->contraceña = $request->contraceña;
        $usuario->id_rol = $request->id_rol;
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(topping $topping)
    {
        //
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->action([UsuarioController::class, 'index']);
    }
}
