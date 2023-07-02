<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Estados.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Estados.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $estado = new Estado();
        $estado->nombre=$request->nombre;
        $estado->descripcion=$request->descripcion;
        $estado->id_sucursal = Auth::user()->id_sucursal;
        $estado->save();

        return redirect()->route('estados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estado)
    {
        return view('Estados.Show', ['estado' => $estado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado)
    {
        return view('Estados.Edit', ['estado' => $estado]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estado $estado)
    {
        $estado->update($request->input());
        $estado->id_sucursal = Auth::user()->id_sucursal;
        $estado->save();

        return redirect()->route('estados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();

        return redirect()->route('estados.index');
    }
}
