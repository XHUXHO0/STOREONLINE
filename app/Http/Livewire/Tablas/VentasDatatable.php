<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Venta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class VentasDatatable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Venta::where('id_sucursal', Auth::user()->id_sucursal);
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Id vendedor", "id_vendedor")
                ->sortable(),
            Column::make("Monto", "monto")
                ->sortable(),
            Column::make("Ganancia", "ganancia")
                ->sortable(),
            Column::make("Items", "items")
                ->sortable(),
            Column::make("Id estatus venta", "id_estatus_venta")
                ->sortable(),
            Column::make("Codigo referencia", "codigo_referencia")
                ->sortable(),
            Column::make('Acciones ', 'id')->format(function ($row) {
                    return view('Ventas.BotonesTabla', ['id' => $row]);
            }),
        ];
    }
}
