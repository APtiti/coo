<?php

namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;


class ToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $toppings=Topping::all();
        return view('Toppings.topping',['topping'=>$toppings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Toppings.topping_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $topping=new Topping($request->all());
        $topping->save();
        return redirect()->action([ToppingController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $topping = Topping::findOrFail($id);
        return view('Toppings.topping_ver',['topping'=>$topping]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $topping = Topping::findOrFail($id);
        return view('Toppings.topping_editar',['topping'=>$topping]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $topping = Topping::findOrFail($id);
        $topping->nombre = $request->nombre;
        $topping->save();
        return redirect()->action([ToppingController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $topping = Topping::findOrFail($id);
        $topping->delete();
        return redirect()->action([ToppingController::class, 'index']);
    }
}
