<?php

namespace App\Filament\Resources\GeologieResource\Pages;

use App\Filament\Resources\GeologieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeologie extends EditRecord
{
    protected static string $resource = GeologieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
