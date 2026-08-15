<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->required()
                    ->maxLength(100)
                    ->label('Company Name'),
                TextInput::make('contact_name')
                    ->maxLength(80)
                    ->label('Contact Name'),
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(20)
                    ->label('Phone'),
                TextInput::make('email')
                    ->email()
                    ->maxLength(80)
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