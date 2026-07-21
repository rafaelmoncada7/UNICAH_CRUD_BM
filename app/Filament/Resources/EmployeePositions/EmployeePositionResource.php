<?php

namespace App\Filament\Resources\EmployeePositions;

use App\Filament\Resources\EmployeePositions\Pages\CreateEmployeePosition;
use App\Filament\Resources\EmployeePositions\Pages\EditEmployeePosition;
use App\Filament\Resources\EmployeePositions\Pages\ListEmployeePositions;
use App\Filament\Resources\EmployeePositions\Schemas\EmployeePositionForm;
use App\Filament\Resources\EmployeePositions\Tables\EmployeePositionsTable;
use App\Models\EmployeePosition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EmployeePositionResource extends Resource
{
    protected static ?string $model = EmployeePosition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return EmployeePositionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EmployeePositionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEmployeePositions::route('/'),
            'create' => CreateEmployeePosition::route('/create'),
            'edit' => EditEmployeePosition::route('/{record}/edit'),
        ];
    }
}
