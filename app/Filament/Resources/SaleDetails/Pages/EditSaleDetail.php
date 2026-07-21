<?php

namespace App\Filament\Resources\SaleDetails\Pages;

use App\Filament\Resources\SaleDetails\SaleDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSaleDetail extends EditRecord
{
    protected static string $resource = SaleDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
