<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaisonMuseeResource\Pages;
use App\Filament\Resources\MaisonMuseeResource\RelationManagers;
use App\Models\MaisonMusee;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaisonMuseeResource extends Resource
{
    protected static ?string $model = MaisonMusee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'Maison Musee';

    protected static ?string $navigationLabel = 'Maison Musee';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label("Nom")->required()->columnSpan(2),
                Forms\Components\RichEditor::make('description')->required()->columnSpan(2),
                Forms\Components\FileUpload::make('images')->image()->multiple()->required()->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label("Nom"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMaisonMusees::route('/'),
            'create' => Pages\CreateMaisonMusee::route('/create'),
            'edit' => Pages\EditMaisonMusee::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return auth()->user()->email === "admin@admin.com";
    }
}
