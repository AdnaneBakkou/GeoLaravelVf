<?php

namespace App\Filament\Resources\ChefchaouenResource\Pages;

use App\Filament\Resources\ChefchaouenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChefchaouens extends ListRecords
{
    protected static string $resource = ChefchaouenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
