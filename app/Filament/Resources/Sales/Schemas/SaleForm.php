<?php

namespace App\Filament\Resources\Sales\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Schema;

class SaleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->relationship('customer', 'first_name') // <--- Cambia 'first_name' por la columna real de tu tabla customers (ej. 'nombre')
                    ->required()
                    ->label('Customer'),

                Select::make('user_id')
                    ->relationship('user', 'name') // 'name' suele ser el estándar en la tabla users de Laravel
                    ->required()
                    ->label('User / Seller'),

                TextInput::make('total')
                    ->required()
                    ->numeric()
                    ->prefix('L.')
                    ->label('Total Amount'),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required()
                    ->default('completed')
                    ->label('Status'),

                DateTimePicker::make('sale_date')
                    ->required()
                    ->default(now())
                    ->label('Sale Date'),
            ]);
    }
}