<?php

namespace App\Filament\Resources\BiodiversiteResource\Pages;

use App\Filament\Resources\BiodiversiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiodiversites extends ListRecords
{
    protected static string $resource = BiodiversiteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
