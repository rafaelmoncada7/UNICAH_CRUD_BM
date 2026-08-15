<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select:: make('name')
                    ->options([
                        'Administrador' => 'Admininistrador',
                        'Empleado' => 'Empleado',
                    ])
                    ->placeholder('Select')
                    ->required(),

                    TextInput::make('descripcion')
                    ->required()
                    ->default(null)
                    ->maxLength(100),
            ]);
    }
}