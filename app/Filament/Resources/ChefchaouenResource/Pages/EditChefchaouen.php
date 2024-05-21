<?php

namespace App\Filament\Resources\ChefchaouenResource\Pages;

use App\Filament\Resources\ChefchaouenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChefchaouen extends EditRecord
{
    protected static string $resource = ChefchaouenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
