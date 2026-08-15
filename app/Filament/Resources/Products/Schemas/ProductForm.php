<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('product_category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Category'),
                Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->required()
                    ->label('Brand'),
                Select::make('unit_id')
                    ->relationship('unit', 'name')
                    ->required()
                    ->label('Unit'),
                TextInput::make('name')
                    ->required()
                    ->maxLength(100)
                    ->label('Product Name'),
                TextInput::make('sku')
                    ->maxLength(100)
                    ->label('SKU'),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('L.')
                    ->label('Price'),
                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->label('Stock'),
                Toggle::make('status')
                    ->default(true)
                    ->label('Active Status'),
                Textarea::make('description')
                    ->maxLength(110)
                    ->columnSpanFull()
                    ->label('Description'),
            ]);
    }
}