<?php

namespace App\Http\Controllers;

use App\Models\Venta;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ventas.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venta = new venta();
        $venta->create($request->input());
        $venta->id_vendedor = Auth::user()->id;
        $venta->id_sucursal = Auth::user()->id_sucursal;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(venta $venta)
    {
        return view('Ventas.Show', ['venta' => $venta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(venta $venta)
    {
        return view('Ventas.Edit', ['venta' => $venta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, venta $venta)
    {
        $venta->update($request->input());
        $venta->id_vendedor = Auth::user()->id;
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
