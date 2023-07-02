<?php

namespace App\Http\Livewire\Tablas;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Venta;

class VentasDatatables extends DataTableComponent
{
    protected $model = Venta::class;

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
            Column::make("Id vendedor", "id_vendedor")
                ->sortable(),
            Column::make("Id sucursal", "id_sucursal")
                ->sortable(),
            Column::make("Id sucursal", "id_sucursal")
                ->sortable(),
            Column::make("Monto", "monto")
                ->sortable(),
            Column::make("Ganancia", "ganancia")
                ->sortable(),
            Column::make("Items", "items")
                ->sortable(),
            Column::make("Id estatus venta", "id_estatus_venta")
                ->sortable(),
            Column::make("Id estatus venta", "id_estatus_venta")
                ->sortable(),
            Column::make("Codigo referencia", "codigo_referencia")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
