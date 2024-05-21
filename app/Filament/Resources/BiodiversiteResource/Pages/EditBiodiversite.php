<?php

namespace App\Filament\Resources\BiodiversiteResource\Pages;

use App\Filament\Resources\BiodiversiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiodiversite extends EditRecord
{
    protected static string $resource = BiodiversiteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
