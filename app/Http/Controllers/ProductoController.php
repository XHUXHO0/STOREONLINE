<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Productos.Index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $estados = Estado::all();

        return view('Productos.Create', [ 'categorias' => $categorias,'estados' => $estados]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $producto = new Producto();
        $producto->id_empresa = Auth::user()->id_empresa;
        $producto->id_sucursal = Auth::user()->id_sucursal;
        $producto->id_vendedor = Auth::user()->id;
        $producto->id_categoria = $request->id_categoria;
        $producto->uri_foto = $request->uri_foto;
        $producto->marca = $request->marca;
        $producto->titulo = $request->titulo;
        $producto->stock = $request->stock;
        $producto->id_estado = $request->id_estado;
        $producto->activo = $request->activo;
        $producto->codigo = $request->codigo;
        $producto->precio = $request->precio;
        $producto->ganancia = $request->ganancia;
        $producto->ubicacion = $request->ubicacion;
        $producto->tamano_o_tipo = $request->tamano_o_tipo;
        $producto->fecha_de_expiracion = $request->fecha_de_expiracion;
        $producto->tipo_de_meditas = $request->tipo_de_meditas;
        $producto->save();


        

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        $categorias = Categoria::all();
        $estados = Estado::all();
        return view('Productos.Show', ['producto' => $producto, 'categorias' => $categorias,'estados' => $estados]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        $estados = Estado::all();
        return view('Productos.Edit', ['producto' => $producto, 'categorias' => $categorias,'estados' => $estados]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        $producto->id_empresa = Auth::user()->id_empresa;
        $producto->id_sucursal = Auth::user()->id_sucursal;
        $producto->id_vendedor = Auth::user()->id;
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }

    public function codigobarras(Producto $producto){

    }
}
