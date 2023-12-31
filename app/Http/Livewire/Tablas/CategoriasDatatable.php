<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CategoriasDatatable extends DataTableComponent
{
    // protected $model = Categoria::class;
    public function builder(): Builder
    {
        return Categoria::where('id_sucursal', Auth::user()->id_sucursal);
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
                    return view('Categorias.BotonesTabla', ['id' => $row]);
                }),
        ];
    }
}
