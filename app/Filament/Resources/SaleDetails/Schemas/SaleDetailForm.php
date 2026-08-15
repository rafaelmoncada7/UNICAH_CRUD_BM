<?php

namespace App\Filament\Resources\SaleDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SaleDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('sale_id')
                    ->relationship('sale', 'id')
                    ->required()
                    ->label('Sale ID'),
                Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->label('Product'),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->label('Quantity'),
                TextInput::make('unit_price')
                    ->required()
                    ->numeric()
                    ->prefix('L.')
                    ->label('Unit Price'),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric()
                    ->prefix('L.')
                    ->label('Subtotal'),
            ]);
    }
}