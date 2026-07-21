<?php

namespace App\Filament\Resources\AuditLogs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AuditLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->label('User'),
                TextInput::make('module')
                    ->required()
                    ->maxLength(255)
                    ->label('Module'),
                TextInput::make('action')
                    ->required()
                    ->maxLength(255)
                    ->label('Action'),
                Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->label('Description'),
                TextInput::make('ip')
                    ->maxLength(45)
                    ->label('IP Address'),
            ]);
    }
}