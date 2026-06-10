<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Services';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informations générales')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug (URL)')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('icon')
                            ->label('Icône')
                            ->options([
                                'heroicon-o-bolt'              => 'Énergie (éclair)',
                                'heroicon-o-building-office'   => 'Infrastructures',
                                'heroicon-o-sun'               => 'Agriculture (soleil)',
                                'heroicon-o-heart'             => 'Santé',
                                'heroicon-o-academic-cap'      => 'Éducation',
                                'heroicon-o-computer-desktop'  => 'Digital',
                                'heroicon-o-globe-alt'         => 'Coopération internationale',
                                'heroicon-o-building-library'  => 'Partenariats PPP',
                                'heroicon-o-chart-bar'         => 'Conseil stratégique',
                            ])
                            ->searchable(),
                        Forms\Components\TextInput::make('ordre')
                            ->label('Ordre d\'affichage')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('actif')
                            ->label('Visible sur le site')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Contenu')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Description courte (card)')
                            ->required()
                            ->rows(3),
                        Forms\Components\Textarea::make('description_complete')
                            ->label('Description complète (page détail)')
                            ->rows(5),
                        Forms\Components\Textarea::make('points_cles')
                            ->label('Points clés (JSON)')
                            ->rows(3)
                            ->helperText('Ex: ["PPP","Financement","Structuration"]'),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('icon')
                    ->label('Icône')
                    ->formatStateUsing(fn($state) => $state)
                    ->html(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('ordre')
                    ->label('Ordre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('actif')
                    ->label('Actif')
                    ->boolean(),
            ])
            ->defaultSort('ordre')
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
            'index'  => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit'   => Pages\EditService::route('/{record}/edit'),
        ];
    }
}