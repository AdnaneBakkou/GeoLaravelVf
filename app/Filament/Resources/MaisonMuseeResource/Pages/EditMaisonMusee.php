<?php

namespace App\Filament\Resources\MaisonMuseeResource\Pages;

use App\Filament\Resources\MaisonMuseeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaisonMusee extends EditRecord
{
    protected static string $resource = MaisonMuseeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
