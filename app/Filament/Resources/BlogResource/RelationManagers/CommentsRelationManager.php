<?php

namespace App\Filament\Resources\BlogResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;

class CommentsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'comments';

    protected static ?string $recordTitleAttribute = 'comment';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('comment')->searchable(),
                Tables\Columns\TextColumn::make('my_blogs.blogTitle')->label('Blog'),
                BooleanColumn::make('status')->label('Showing?')
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
            ])
            ->filters([
                //
            ]);
    }
}
