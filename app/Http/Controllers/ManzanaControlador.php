<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use Illuminate\Http\Request;

class ManzanaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manzanas = Manzana::all();

        return view('vistaManzanas', ['manzanas' => $manzanas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manzana = new Manzana;

        $manzana->tipoManzana = 'Verde';
        $manzana->precioKilo = 2;

        $manzana->save();

        return redirect('verManzanas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manzana $manzana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manzana $manzana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manzana $manzana)
    {
        $manzana->id = $request->id;
        $manzana->tipoManzana = "Amarilla";
        $manzana->precioKilo = 33;

        Manzana::where('id', $manzana->id)->update(['tipoManzana' => $manzana->tipoManzana, 'precioKilo' => $manzana->precioKilo]);

        return redirect('verManzanas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manzana $manzana)
    {
        $idEliminar = 10;
        Manzana::where('id', $idEliminar)->delete();

        return redirect('verManzanas');
    }
}
