<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static bool $shouldRegisterNavigation = true;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->columns(2)->schema([
                    Forms\Components\TextInput::make('name')
                        ->prefixIcon('heroicon-o-external-link')
                        ->required(),

                    Forms\Components\TextInput::make('username')
                        ->prefixIcon('heroicon-o-user-circle')
                        ->required(),

                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->prefixIcon('heroicon-o-at-symbol')
                        ->required(),
                    Forms\Components\TextInput::make( name: 'password')
                        ->password()
                        ->maxLength( length: 255)
                        ->dehydrateStateUsing(static fn (null|string $state): null|string =>
                        filled ($state) ? Hash::make($state) : null,
                        )->required( static fn (Page $livewire): bool =>
                            $livewire instanceof Pages\CreateUser)
                        ->dehydrated(static fn (null|string $state): bool =>
                        filled( $state)) ->label(static fn (Page $livewire): string =>
                        ($livewire instanceof Pages\EditUser) ? 'New Password' : 'Password'),
                    Forms\Components\FileUpload::make('profile_photo_path')
                    ->avatar()
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('names')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->date()
            ])
            ->filters([
                //
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
