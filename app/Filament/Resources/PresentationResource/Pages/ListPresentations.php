<?php

namespace App\Filament\Resources\PresentationResource\Pages;

use App\Filament\Resources\PresentationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPresentations extends ListRecords
{
    protected static string $resource = PresentationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
