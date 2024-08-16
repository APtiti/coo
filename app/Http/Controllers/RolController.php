<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles=Rol::all();
        return view('Roles.rol',['rol'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Roles.rol_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rol=new Rol($request->all());
        $rol->save();
        return redirect()->action([RolController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $rol = Rol::findOrFail($id);
        return view('Roles.rol_ver',['rol'=>$rol]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $rol = Rol::findOrFail($id);
        return view('Roles.rol_editar',['rol'=>$rol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $rol = Rol::findOrFail($id);
        $rol->nombre = $request->nombre;
        $rol->save();
        return redirect()->action([RolController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return redirect()->action([RolController::class, 'index']);
    }
}
