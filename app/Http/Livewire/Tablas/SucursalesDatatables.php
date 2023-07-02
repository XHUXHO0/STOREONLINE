<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Sucursal;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class SucursalesDatatables extends DataTableComponent
{
    protected $model = Sucursal::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('Title', 'title')
                ->sortable(),
            Column::make('Direccion', 'direccion')
                ->sortable(),
            Column::make('Descripccion', 'descripccion')
                ->sortable(),
            Column::make('Id empresa', 'id_empresa')
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable(),
            Column::make('Updated at', 'updated_at')
                ->sortable(),
        ];
    }
}
