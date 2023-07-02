<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Empresas.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Empresas.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $empresa = new Empresa();
        $empresa->title = $request->title;
        $empresa->direccion = $request->direccion;
        $empresa->razon_social = $request->razon_social;
        $empresa->save();
        

        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {//dd($empresa);
        return view('Empresas.Show', ['empresa' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        return view('Empresas.Edit', ['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        
        $empresa->update($request->input());
        $empresa->save();

        return redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return redirect()->route('empresas.index');
    }
}
