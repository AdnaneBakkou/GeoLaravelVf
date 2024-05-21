<?php

namespace App\Filament\Resources\GeositeResource\Pages;

use App\Filament\Resources\GeositeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeosites extends ListRecords
{
    protected static string $resource = GeositeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
