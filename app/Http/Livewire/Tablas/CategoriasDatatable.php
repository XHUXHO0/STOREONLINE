<?php

namespace App\Http\Livewire\Tablas;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Categoria;

class CategoriasDatatable extends DataTableComponent
{
    protected $model = Categoria::class;

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
                    return view('Categorias.BotonesTabla', ['id' => $row]);
                }),
        ];
    }
}
