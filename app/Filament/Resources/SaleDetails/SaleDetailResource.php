<?php

namespace App\Filament\Resources\SaleDetails;

use App\Filament\Resources\SaleDetails\Pages\CreateSaleDetail;
use App\Filament\Resources\SaleDetails\Pages\EditSaleDetail;
use App\Filament\Resources\SaleDetails\Pages\ListSaleDetails;
use App\Filament\Resources\SaleDetails\Schemas\SaleDetailForm;
use App\Filament\Resources\SaleDetails\Tables\SaleDetailsTable;
use App\Models\SaleDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SaleDetailResource extends Resource
{
    protected static ?string $model = SaleDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return SaleDetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SaleDetailsTable::configure($table);
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
            'index' => ListSaleDetails::route('/'),
            'create' => CreateSaleDetail::route('/create'),
            'edit' => EditSaleDetail::route('/{record}/edit'),
        ];
    }
}
