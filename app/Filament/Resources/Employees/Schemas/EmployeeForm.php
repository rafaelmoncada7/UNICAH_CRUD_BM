<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('position_id')
                    ->relationship('position', 'name')
                    ->required()
                    ->label('Employee Position'),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->nullable()
                    ->label('User Account'),
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
                    ->maxLength(80)
                    ->label('Email'),
                TextInput::make('address')
                    ->maxLength(100)
                    ->label('Address'),
                DatePicker::make('birth_date')
                    ->label('Birth Date'),
                TextInput::make('salary')
                    ->required()
                    ->numeric()
                    ->prefix('L.')
                    ->default(0)
                    ->label('Salary'),
                Toggle::make('status')
                    ->default(true)
                    ->label('Status'),
            ]);
    }
}