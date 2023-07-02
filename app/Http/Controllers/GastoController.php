<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GastoController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Gastos.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Gastos.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gasto = new Gasto();
        $gasto->id_vendedor = Auth::user()->id;
        $gasto->id_sucursal = Auth::user()->id_sucursal;
        $gasto->titulo = $request->titulo;
        $gasto->monto = $request->monto;
        $gasto->descripcion = $request->descripcion;
        $gasto->save();

        return redirect()->route('gastos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gasto $gasto)
    {
        return view('Gastos.Show', ['gasto' => $gasto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gasto $gasto)
    {
        return view('Gastos.Edit', ['gasto' => $gasto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gasto $Gasto)
    {
        $Gasto->update($request->input());
        $Gasto->id_vendedor = Auth::user()->id;
        $Gasto->id_sucursal = Auth::user()->id_sucursal;
        $Gasto->save();

        return redirect()->route('gastos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gasto $Gasto)
    {
        $Gasto->delete();

        return redirect()->route('gastos.index');
    }
}
