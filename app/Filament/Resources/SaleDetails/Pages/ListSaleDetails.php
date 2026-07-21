<?php

namespace App\Filament\Resources\SaleDetails\Pages;

use App\Filament\Resources\SaleDetails\SaleDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSaleDetails extends ListRecords
{
    protected static string $resource = SaleDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
