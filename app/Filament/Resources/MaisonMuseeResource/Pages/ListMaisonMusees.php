<?php

namespace App\Filament\Resources\MaisonMuseeResource\Pages;

use App\Filament\Resources\MaisonMuseeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaisonMusees extends ListRecords
{
    protected static string $resource = MaisonMuseeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
