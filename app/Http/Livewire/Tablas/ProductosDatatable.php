<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Producto;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class ProductosDatatable extends DataTableComponent
{
    protected $model = Producto::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
            ->sortable(),
            ImageColumn::make('Foto')
            ->location(
                fn ($row) => $row->uri_foto
            )
            ->attributes(fn ($row) => [
                'class' => 'rounded-full w-auto h-auto ',
                'alt' => $row->nombre.' Avatar',
            ]),
            Column::make("Categoria", "categoria.nombre")
                ->sortable()->searchable(),
            Column::make("Marca", "marca")
                ->sortable()->searchable(),
            Column::make("Titulo", "titulo")
                    ->sortable()->searchable(),
            Column::make("Stock", "stock")
                ->sortable(),
            BooleanColumn::make('Activo', 'activo')
                ->sortable(),
            Column::make('Estado', 'estado.nombre')
                ->sortable(),
            Column::make("Codigo", "codigo")
                ->sortable()
                ->searchable(),
            Column::make("Precio", "precio")
                ->sortable(),
            Column::make("Ganancia", "ganancia")
                ->sortable(),
            Column::make("Tamaño o tipo", "tamaño_o_tipo")
                ->sortable(),
            Column::make("Fecha de expiracion", "fecha_de_expiracion")
                ->sortable(),
            Column::make("Ubicacion", "ubicacion")
                ->sortable(),
            Column::make("Tipo de meditas", "tipo_de_meditas")
                ->sortable(),
            Column::make("Creado", "created_at")
                ->sortable(),
            Column::make('Acciones ', 'id')->format(function ($row) {
                    return view('Productos.BotonesTabla', ['id' => $row]);
                }),
            Column::make("Direccion foto", "uri_foto")
                ->sortable(),
        ];
    }
}
