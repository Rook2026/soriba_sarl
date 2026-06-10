<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatResource\Pages;
use App\Models\Stat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StatResource extends Resource
{
    protected static ?string $model = Stat::class;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Statistiques';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Chiffre clé')
                    ->schema([
                        Forms\Components\TextInput::make('valeur')
                            ->label('Valeur affichée')
                            ->required()
                            ->helperText('Ex: 24+, €2B+, 12')
                            ->maxLength(20),
                        Forms\Components\TextInput::make('label')
                            ->label('Libellé')
                            ->required()
                            ->helperText('Ex: Projets accompagnés')
                            ->maxLength(100),
                        Forms\Components\Select::make('section')
                            ->label('Section du site')
                            ->options([
                                'home'     => 'Page d\'accueil',
                                'about'    => 'Page à propos',
                                'projects' => 'Page projets',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('ordre')
                            ->label('Ordre d\'affichage')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('actif')
                            ->label('Visible sur le site')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('valeur')
                    ->label('Valeur')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('label')
                    ->label('Libellé')
                    ->searchable(),
                Tables\Columns\TextColumn::make('section')
                    ->label('Section')
                    ->badge()
                    ->color(fn($state) => match($state) {
                        'home'     => 'success',
                        'about'    => 'info',
                        'projects' => 'warning',
                        default    => 'gray',
                    }),
                Tables\Columns\TextColumn::make('ordre')
                    ->label('Ordre')
                    ->sortable(),
                Tables\Columns\IconColumn::make('actif')
                    ->label('Actif')
                    ->boolean(),
            ])
            ->defaultSort('section')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListStats::route('/'),
            'create' => Pages\CreateStat::route('/create'),
            'edit'   => Pages\EditStat::route('/{record}/edit'),
        ];
    }
}