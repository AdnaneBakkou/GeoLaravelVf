<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeositeResource\Pages;
use App\Filament\Resources\GeositeResource\RelationManagers;
use App\Models\Geosite;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeositeResource extends Resource
{
    protected static ?string $model = Geosite::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'Géiosite';

    protected static ?string $navigationLabel = 'Géiosites';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Géiosites')
                    ->schema([
                        Forms\Components\RichEditor::make('text_1')
                            ->label("Texte")
                            ->columnSpan(2)
                            ->required(),
                        Forms\Components\FileUpload::make('image_1')
                            ->image()
                            ->label("Image")
                            ->required(),

                    ]),
                Forms\Components\Section::make('Liste et description des sites géologiques du Géoparc mondial UNESCO')
                    ->schema([
                        Forms\Components\RichEditor::make('text_2')
                            ->label("Texte")
                            ->columnSpan(2)
                            ->required(),
                        Forms\Components\FileUpload::make('image_2')
                            ->image()
                            ->label("Image")
                            ->required(),

                    ]),
                Forms\Components\Repeater::make("table")
                    ->label("Site géologique et niveau d'importance")
                    ->schema([
                        Forms\Components\TextInput::make('nom')->label("Nom du site géologique")->required(),
                        Forms\Components\Select::make('type')->label("Type d'intérêt géologique")->options([
                            '1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                        ])->required(),
                        Forms\Components\Select::make('niveau')
                            ->multiple()
                            ->label("Niveau")
                            ->options([
                                'Référence mondiale' => 'Référence mondiale',
                                'International' => 'International',
                                'National' => 'National',
                                'Local' => 'Local',
                            ])->required(),
                    ])
                    ->columns(3)
                    ->createItemButtonLabel('Ajouter une ligne')
                    ->columnSpan(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('modifier')->getStateUsing(fn ($record) => "Géiosite")
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
            'index' => Pages\ListGeosites::route('/'),
            'create' => Pages\CreateGeosite::route('/create'),
            'edit' => Pages\EditGeosite::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return auth()->user()->email === "admin@admin.com";
    }
}
