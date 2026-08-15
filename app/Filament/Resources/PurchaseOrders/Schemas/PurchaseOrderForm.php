<?php

namespace App\Filament\Resources\PurchaseOrders\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class PurchaseOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('supplier_id')
                    ->label('Proveedor')
                    ->relationship('supplier', 'company_name') // <--- Cambiado aquí a company_name
                    ->required(),

                DatePicker::make('order_date')
                    ->label('Fecha de orden')
                    ->required(),

                TextInput::make('total')
                    ->label('Total')
                    ->numeric()
                    ->required(),

                Select::make('status')
                    ->label('Estado')
                    ->options([
                        'pendiente' => 'Pendiente',
                        'completado' => 'Completado',
                        'cancelado' => 'Cancelado',
                    ])
                    ->default('pendiente')
                    ->required(),
            ]);
    }
}