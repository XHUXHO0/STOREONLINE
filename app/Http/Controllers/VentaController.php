<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Venta;
use App\Models\Estado_venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Ventas.Index');
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venta = new venta();
        $venta->create($request->input());
        $venta->id_usuario = Auth::user()->id;
        $venta->id_sucursal = Auth::user()->id_sucursal;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(venta $venta)
    {
        $estatus_ventas = Estado_venta::all();
        $vendedores = User::where('id_empresa', Auth::user()->id_empresa)->where('id_sucursal', Auth::user()->id_sucursal)->get();
        return view('Ventas.Show', ['venta' => $venta,'estatus_ventas'=>$estatus_ventas,'vendedores'=>$vendedores]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(venta $venta)
    {
        $estatus_ventas = Estado_venta::all();
        $vendedores = User::where('id_empresa', Auth::user()->id_empresa)->where('id_sucursal', Auth::user()->id_sucursal)->get();
        return view('Ventas.Edit', ['venta' => $venta,'estatus_ventas'=>$estatus_ventas,'vendedores'=>$vendedores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, venta $venta)
    {
        $venta->update($request->input());
        $venta->id_usuario = Auth::user()->id;
        $venta->id_sucursal = Auth::user()->id_sucursal;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(venta $venta)
    {
        $venta->delete();

        return redirect()->route('ventas.index');
    }
}
