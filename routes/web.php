<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\VentaController;
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

    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/{empresa}/show', [EmpresaController::class, 'show'])->name('empresas.show');
    Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
    Route::post('/empresas/store', [EmpresaController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/{empresa}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');
    Route::put('/empresas/{empresa}/update', [EmpresaController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/{empresa}/delete', [EmpresaController::class, 'destroy'])->name('empresas.destroy');


    Route::get('/sucursales', [SucursalController::class, 'index'])->name('sucursales.index');
    Route::get('/sucursales/{sucursal}/show', [SucursalController::class, 'show'])->name('sucursales.show');
    Route::get('/sucursales/create', [SucursalController::class, 'create'])->name('sucursales.create');
    Route::post('/sucursales/store', [SucursalController::class, 'store'])->name('sucursales.store');
    Route::get('/sucursales/{sucursal}/edit', [SucursalController::class, 'edit'])->name('sucursales.edit');
    Route::put('/sucursales/{sucursal}/update', [SucursalController::class, 'update'])->name('sucursales.update');
    Route::delete('/sucursales/{sucursal}/delete', [SucursalController::class, 'destroy'])->name('sucursales.destroy');


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

    Route::get('/gastos', [GastoController::class, 'index'])->name('gastos.index');
    Route::get('/gastos/{gasto}/show', [GastoController::class, 'show'])->name('gastos.show');
    Route::get('/gastos/create', [GastoController::class, 'create'])->name('gastos.create');
    Route::post('/gastos/store', [GastoController::class, 'store'])->name('gastos.store');
    Route::get('/gastos/{gasto}/edit', [GastoController::class, 'edit'])->name('gastos.edit');
    Route::put('/gastos/{gasto}/update', [GastoController::class, 'update'])->name('gastos.update');
    Route::delete('/gastos/{gasto}/delete', [GastoController::class, 'destroy'])->name('gastos.destroy');

    Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');
    Route::get('/ventas/{venta}/show', [VentaController::class, 'show'])->name('ventas.show');
    Route::get('/ventas/create', [VentaController::class, 'create'])->name('ventas.create');
    Route::post('/ventas/store', [VentaController::class, 'store'])->name('ventas.store');
    Route::get('/ventas/{venta}/edit', [VentaController::class, 'edit'])->name('ventas.edit');
    Route::put('/ventas/{venta}/update', [VentaController::class, 'update'])->name('ventas.update');
    Route::delete('/ventas/{venta}/delete', [VentaController::class, 'destroy'])->name('ventas.destroy');
});
