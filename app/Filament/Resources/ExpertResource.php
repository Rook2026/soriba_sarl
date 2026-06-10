<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpertResource\Pages;
use App\Models\Expert;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ExpertResource extends Resource
{
    protected static ?string $model = Expert::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Experts';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Identité')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nom complet')
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
                        Forms\Components\TextInput::make('role')
                            ->label('Titre / Poste')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('initials')
                            ->label('Initiales')
                            ->required()
                            ->maxLength(5)
                            ->helperText('Ex: SD, RO, FB'),
                        Forms\Components\TextInput::make('location')
                            ->label('Localisation')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('ordre')
                            ->label('Ordre d\'affichage')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('actif')
                            ->label('Visible sur le site')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Photo de profil')
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->label('Photo')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('experts')
                            ->visibility('public')
                            ->imagePreviewHeight('200')
                            ->helperText('Format JPG ou PNG. Taille idéale : 400x400px.')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Biographie')
                    ->schema([
                        Forms\Components\Textarea::make('bio')
                            ->label('Biographie courte (cards)')
                            ->required()
                            ->rows(3),
                        Forms\Components\Textarea::make('bio_full')
                            ->label('Biographie complète (page détail)')
                            ->rows(6),
                    ])->columns(1),

                Forms\Components\Section::make('Compétences & Contact')
                    ->schema([
                        Forms\Components\TagsInput::make('expertise')
                            ->label('Compétences clés')
                            ->helperText('Tapez une compétence et appuyez sur Entrée')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('linkedin')
                            ->label('LinkedIn (URL)')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Réseaux sociaux')
                    ->schema([
                        Forms\Components\Repeater::make('reseaux_sociaux')
                            ->label('')
                            ->schema([
                                Forms\Components\Select::make('reseau')
                                    ->label('Réseau')
                                    ->options([
                                        'facebook'  => 'Facebook',
                                        'instagram' => 'Instagram',
                                        'youtube'   => 'YouTube',
                                        'tiktok'    => 'TikTok',
                                        'whatsapp'  => 'WhatsApp',
                                        'telegram'  => 'Telegram',
                                        'twitter'   => 'Twitter / X',
                                        'snapchat'  => 'Snapchat',
                                    ])
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL ou numéro')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->columns(2)
                            ->addActionLabel('Ajouter un réseau')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Photo')
                    ->disk('public')
                    ->circular()
                    ->defaultImageUrl(fn($record) => 'https://ui-avatars.com/api/?name=' . urlencode($record->name) . '&background=0A192F&color=D4AF37'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('role')
                    ->label('Poste')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->label('Localisation'),
                Tables\Columns\TextColumn::make('ordre')
                    ->label('Ordre')
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
            'index'  => Pages\ListExperts::route('/'),
            'create' => Pages\CreateExpert::route('/create'),
            'edit'   => Pages\EditExpert::route('/{record}/edit'),
        ];
    }
}