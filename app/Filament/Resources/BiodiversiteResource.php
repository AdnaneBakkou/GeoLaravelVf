<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BiodiversiteResource\Pages;
use App\Filament\Resources\BiodiversiteResource\RelationManagers;
use App\Models\Biodiversite;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BiodiversiteResource extends Resource
{
    protected static ?string $model = Biodiversite::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'Biodiversité';

    protected static ?string $navigationLabel = 'Biodiversité';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('description')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\FileUpload::make('images')
                    ->label("Carrousel d'images")
                    ->image()
                    ->multiple()
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\Repeater::make("sites")
                    ->schema([
                        Forms\Components\TextInput::make('name')->label("Nom")->columnSpan(2)->required(),
                        Forms\Components\Textarea::make('description')->columnSpan(2)->required(),
                        Forms\Components\FileUpload::make('images')->image()->multiple()->columnSpan(2)->required(),
                    ])
                    ->createItemButtonLabel('Ajouter un site ')
                    ->columnSpan(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('modifier')->getStateUsing(fn ($record) => "Biodiversité")
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
            'index' => Pages\ListBiodiversites::route('/'),
            'create' => Pages\CreateBiodiversite::route('/create'),
            'edit' => Pages\EditBiodiversite::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return auth()->user()->email === "admin@admin.com";
    }
}
