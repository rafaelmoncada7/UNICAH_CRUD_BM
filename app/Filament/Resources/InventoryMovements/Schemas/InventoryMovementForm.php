<?php

namespace App\Filament\Resources\InventoryMovements\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InventoryMovementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->label('Product'),
                Select::make('type')
                    ->options([
                        'in' => 'In (Stock Addition)',
                        'out' => 'Out (Stock Reduction)',
                    ])
                    ->required()
                    ->label('Movement Type'),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->label('Quantity'),
                Textarea::make('reason')
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->label('Reason'),
            ]);
    }
}