<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Estado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class EstadosDatatable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Estado::where('id_sucursal', Auth::user()->id_sucursal);
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
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make('Acciones ', 'id')->format(function ($row) {
                    return view('Estados.BotonesTabla', ['id' => $row]);
                }),
        ];
    }
}
