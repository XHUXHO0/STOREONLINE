<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class ClientesDatatables extends DataTableComponent
{
    public function builder(): Builder
    {
        return Cliente::where('id_sucursal', Auth::user()->id_sucursal);
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),

            ImageColumn::make('Foto Cliente')
                ->location(
                    fn ($row) => $row->uri_foto
                )
                ->attributes(fn ($row) => [
                    'class' => 'rounded-full w-20 h-20',
                    'alt' => $row->nombre.' Avatar',
                ]),
            Column::make('Nombre', 'nombre')
                ->sortable(),
            Column::make('Apellidos', 'apellidos')
                ->sortable(),
            Column::make('Direccion', 'direccion')
                ->sortable(),
            Column::make('Numero telefonico', 'numero_telefonico')
                ->sortable(),
            Column::make('Email', 'email')
                ->sortable(),
           
            Column::make('Acciones ', 'id')->format(function ($row) {
                    return view('Clientes.BotonesTabla', ['id' => $row]);
            }),   
            Column::make('Uri foto', 'uri_foto')
                ->sortable(),
        ];
    }
}
