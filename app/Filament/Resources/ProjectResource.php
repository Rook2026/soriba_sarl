<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Projets';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informations générales')
                    ->schema([
                        Forms\Components\Select::make('service_id')
                            ->label('Secteur')
                            ->options(Service::where('actif', true)->pluck('title', 'id'))
                            ->searchable()
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($state, callable $set) =>
                                $set('slug', Str::slug($state))
                            ),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug (URL)')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('statut')
                            ->label('Statut')
                            ->options([
                                'planification' => 'Planification',
                                'en_cours'      => 'En cours',
                                'realise'       => 'Réalisé',
                                'suspendu'      => 'Suspendu',
                            ])
                            ->required()
                            ->default('planification'),
                        Forms\Components\TextInput::make('progression')
                            ->label('Avancement (%)')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->default(0),
                        Forms\Components\Select::make('icone')
                            ->label('Icône')
                            ->options([
                                'heroicon-o-bolt'             => 'Énergie',
                                'heroicon-o-building-office'  => 'Infrastructures',
                                'heroicon-o-sun'              => 'Agriculture',
                                'heroicon-o-heart'            => 'Santé',
                                'heroicon-o-academic-cap'     => 'Éducation',
                                'heroicon-o-computer-desktop' => 'Digital',
                                'heroicon-o-globe-alt'        => 'Coopération',
                                'heroicon-o-building-library' => 'PPP',
                                'heroicon-o-chart-bar'        => 'Conseil',
                            ])
                            ->searchable(),
                        Forms\Components\Toggle::make('featured')
                            ->label('Projet vedette (double colonne)')
                            ->default(false),
                        Forms\Components\Toggle::make('actif')
                            ->label('Visible sur le site')
                            ->default(true),
                        Forms\Components\TextInput::make('ordre')
                            ->label('Ordre d\'affichage')
                            ->numeric()
                            ->default(0),
                    ])->columns(2),

                Forms\Components\Section::make('Localisation & Finances')
                    ->schema([
                        Forms\Components\TextInput::make('pays')
                            ->label('Pays'),
                        Forms\Components\TextInput::make('ville')
                            ->label('Ville'),
                        Forms\Components\TextInput::make('volume_investissement')
                            ->label('Volume d\'investissement')
                            ->helperText('Ex: €180M'),
                        Forms\Components\TextInput::make('modele_financement')
                            ->label('Modèle de financement')
                            ->helperText('Ex: PPP / BOT'),
                        Forms\Components\DatePicker::make('date_debut')
                            ->label('Date de démarrage'),
                        Forms\Components\DatePicker::make('date_fin_prevue')
                            ->label('Livraison prévue'),
                    ])->columns(2),

                Forms\Components\Section::make('Contenu')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Description courte (card listing)')
                            ->required()
                            ->rows(3),
                        Forms\Components\Textarea::make('description_complete')
                            ->label('Description complète (page détail)')
                            ->rows(5),
                        Forms\Components\Textarea::make('kpis')
                            ->label('KPIs (JSON)')
                            ->rows(3)
                            ->helperText('Ex: [{"label":"Capacité","value":"200 MW"},{"label":"Emplois","value":"1200"}]'),
                        Forms\Components\Textarea::make('phases')
                            ->label('Phases (JSON)')
                            ->rows(4)
                            ->helperText('Ex: [{"numero":1,"titre":"Études","description":"...","statut":"termine"}]'),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('service.title')
                    ->label('Secteur')
                    ->badge()
                    ->color('warning'),
                Tables\Columns\TextColumn::make('statut')
                    ->label('Statut')
                    ->badge()
                    ->color(fn($state) => match($state) {
                        'realise'       => 'success',
                        'en_cours'      => 'warning',
                        'planification' => 'info',
                        'suspendu'      => 'danger',
                        default         => 'gray',
                    }),
                Tables\Columns\TextColumn::make('progression')
                    ->label('Avancement')
                    ->formatStateUsing(fn($state) => $state . '%')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pays')
                    ->label('Pays'),
                Tables\Columns\TextColumn::make('volume_investissement')
                    ->label('Investissement'),
                Tables\Columns\IconColumn::make('featured')
                    ->label('Vedette')
                    ->boolean(),
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
            'index'  => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit'   => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}