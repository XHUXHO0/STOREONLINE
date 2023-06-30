<?php

namespace App\Http\Livewire\Tablas;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Estado;

class EstadosDatatable extends DataTableComponent
{
    protected $model = Estado::class;

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
