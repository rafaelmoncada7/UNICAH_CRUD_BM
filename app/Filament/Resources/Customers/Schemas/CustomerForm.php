<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('dni')
                    ->required()
                    ->maxLength(20)
                    ->label('DNI'),
                TextInput::make('first_name')
                    ->required()
                    ->maxLength(40)
                    ->label('First Name'),
                TextInput::make('last_name')
                    ->required()
                    ->maxLength(40)
                    ->label('Last Name'),
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(20)
                    ->label('Phone'),
                TextInput::make('email')
                    ->email()
                    ->maxLength(100)
                    ->label('Email'),
                TextInput::make('address')
                    ->maxLength(100)
                    ->label('Address'),
                Toggle::make('status')
                    ->default(true)
                    ->label('Status'),
            ]);
    }
}