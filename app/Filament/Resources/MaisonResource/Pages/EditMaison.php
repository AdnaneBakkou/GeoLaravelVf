<?php

namespace App\Filament\Resources\MaisonResource\Pages;

use App\Filament\Resources\MaisonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaison extends EditRecord
{
    protected static string $resource = MaisonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
