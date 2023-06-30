<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

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
    'verified'
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
});
