<?php

namespace App\Filament\Resources\MaisonResource\Pages;

use App\Filament\Resources\MaisonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaisons extends ListRecords
{
    protected static string $resource = MaisonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
