<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('descripcion')
                    ->label('Descripción')
                    ->required()
                    ->maxLength(100),

                TextInput::make('monto')
                    ->label('Monto')
                    ->numeric()
                    ->required(),

                DatePicker::make('fecha')
                    ->label('Fecha')
                    ->required(),
            ]);
    }
}