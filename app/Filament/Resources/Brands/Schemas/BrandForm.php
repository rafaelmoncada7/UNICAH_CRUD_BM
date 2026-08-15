<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre de la marca')
                    ->required()
                    ->maxLength(80),

                TextInput::make('descripcion')
                    ->label('Descripción')
                    ->maxLength(100),
            ]);
    }
}