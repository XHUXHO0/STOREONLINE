<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Sucursales.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sucursales.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sucursal = new sucursal();
        $sucursal->create($request->input());

        return redirect()->route('sucursales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sucursal $sucursal)
    {//dd($sucursal);
        return view('Sucursales.Show', ['sucursal' => $sucursal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sucursal $sucursal)
    {
        return view('Sucursales.Edit', ['sucursal' => $sucursal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sucursal $sucursal)
    {
        $sucursal->update($request->input());
        $sucursal->save();

        return redirect()->route('sucursales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();

        return redirect()->route('sucursales.index');
    }
}
