<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(80),

                TextInput::make('email')
                    ->label('Correo Electrónico')
                    ->email()
                    ->required()
                    ->maxLength(100),

                TextInput::make('password')
                    ->label('Contraseña')
                    ->password()
                    ->required()
                    ->maxLength(20)
                    ->hiddenOn('edit'), 
                DateTimePicker::make('email_verified_at')
                    ->label('Correo Verificado En'),
            ]);
    }
}