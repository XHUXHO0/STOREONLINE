<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/categorias/{categoria}/show', [CategoriaController::class, 'show'])->name('categorias.show');
    Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('/categorias/{categoria}/update', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/categorias/{categoria}/delete', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

    Route::get('/estados', [EstadoController::class, 'index'])->name('estados.index');
    Route::get('/estados/{estado}/show', [EstadoController::class, 'show'])->name('estados.show');
    Route::get('/estados/create', [EstadoController::class, 'create'])->name('estados.create');
    Route::post('/estados/store', [EstadoController::class, 'store'])->name('estados.store');
    Route::get('/estados/{estado}/edit', [EstadoController::class, 'edit'])->name('estados.edit');
    Route::put('/estados/{estado}/update', [EstadoController::class, 'update'])->name('estados.update');
    Route::delete('/estados/{estado}/delete', [EstadoController::class, 'destroy'])->name('estados.destroy');

    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/productos/{producto}/genere/barras', [ProductoController::class, 'codigobarras'])->name('productos.codigobarras');
    Route::get('/productos/{producto}/show', [ProductoController::class, 'show'])->name('productos.show');
    Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/productos/store', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{producto}/update', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('/productos/{producto}/delete', [ProductoController::class, 'destroy'])->name('productos.destroy');

    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/{cliente}/show', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}/update', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{cliente}/delete', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/{empresa}/show', [EmpresaController::class, 'show'])->name('empresas.show');
    Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
    Route::post('/empresas/store', [EmpresaController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/{empresa}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');
    Route::put('/empresas/{empresa}/update', [EmpresaController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/{empresa}/delete', [EmpresaController::class, 'destroy'])->name('empresas.destroy');

});
