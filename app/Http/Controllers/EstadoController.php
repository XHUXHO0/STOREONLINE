<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

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
        $categoria = new Estado();
        $categoria->create($request->input());

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
