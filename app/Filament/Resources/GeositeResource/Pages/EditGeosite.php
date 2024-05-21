<?php

namespace App\Filament\Resources\GeositeResource\Pages;

use App\Filament\Resources\GeositeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeosite extends EditRecord
{
    protected static string $resource = GeositeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
