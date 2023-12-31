<?php

namespace App\Http\Livewire\Tablas;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Empresa;

class EmpresasDatatable extends DataTableComponent
{
    protected $model = Empresa::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Title", "title")
                ->sortable(),
            Column::make("Direccion", "direccion")
                ->sortable(),
            Column::make("Razon social", "razon_social")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Acciones ', 'id')->format(function ($row) {
                return view('Empresas.BotonesTabla', ['id' => $row]);
            }),  
        ];
    }
}
