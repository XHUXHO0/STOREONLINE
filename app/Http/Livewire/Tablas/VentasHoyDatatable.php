<?php

namespace App\Http\Livewire\Tablas;

use Carbon\Carbon;
use App\Models\Venta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class VentasHoyDatatable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Venta::where('id_sucursal', Auth::user()->id_sucursal)->where('created_at','like','%'.Carbon::now()->format('Y-m-d').'%' ,);
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
            Column::make("Id usuario", "id_usuario")
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
            Column::make("Codigo referencia", "codigo_referencia")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
