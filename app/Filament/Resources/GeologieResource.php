<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeologieResource\Pages;
use App\Filament\Resources\GeologieResource\RelationManagers;
use App\Models\Geologie;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeologieResource extends Resource
{
    protected static ?string $model = Geologie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'Géologie';

    protected static ?string $navigationLabel = 'Géologie';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Repeater::make("table_1")
                    ->label("Cadre géologique et niveau d'importance")
                    ->schema([
                        Forms\Components\TextInput::make('cadre')->label("Cadre géologique")->required(),
                        Forms\Components\Select::make('niveau')->label("Niveau")->options([
                            'Référence mondiale' => 'Référence mondiale',
                            'International' => 'International',
                            'National' => 'National',
                            'Local' => 'Local',
                        ])->required(),
                    ])
                    ->columns(2)
                    ->createItemButtonLabel('Ajouter une ligne')
                    ->columnSpan(2)
                    ->collapsible(),
                Forms\Components\Repeater::make("table_2")
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
                Forms\Components\Repeater::make("sites")
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label("Nom")
                            ->columnSpan(2)
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->columnSpan(2)
                            ->required(),
                        Forms\Components\FileUpload::make('images')
                            ->image()
                            ->multiple()
                            ->columnSpan(2)
                            ->required(),
                    ])
                    ->columns(2)
                    ->createItemButtonLabel('Ajouter une ligne')
                    ->columnSpan(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('modifier')->getStateUsing(fn ($record) => "Géologie"),
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
            'index' => Pages\ListGeologies::route('/'),
            'create' => Pages\CreateGeologie::route('/create'),
            'edit' => Pages\EditGeologie::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return auth()->user()->email === "admin@admin.com";
    }
}
