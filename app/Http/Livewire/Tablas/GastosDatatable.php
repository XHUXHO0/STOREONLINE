<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Gasto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class GastosDatatable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Gasto::where('id_sucursal', Auth::user()->id_sucursal);
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
            Column::make("Titulo", "titulo")
                ->sortable(),
            Column::make("Monto", "monto")
                ->sortable(),
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make('Acciones ', 'id')->format(function ($row) {
                    return view('Gastos.BotonesTabla', ['id' => $row]);
                }),
        ];
    }
}
