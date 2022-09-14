<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use App\Models\Category;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'blogs';

    protected static ?string $recordTitleAttribute = 'blogTitle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->columns(2)->schema([
                    Forms\Components\Select::make('category_id')
                        ->label('Category')
                        ->options(Category::all()->pluck('categoryName', 'id'))
                        ->searchable()->required(),
                    Forms\Components\Hidden::make('user_id')->default(Auth::id()),
                    Forms\Components\TextInput::make('blogTitle')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('blogSlug', Str::slug($state));
                        })->required(),
                    Forms\Components\TextInput::make('blogSlug')
                        ->disabled()
                        ->maxLength(255)->required(),
                    Forms\Components\Textarea::make('blogSummary')
                        ->required()
                        ->maxLength(65535)->required()
                ]),
                Card::make()->columns(1)->schema([
                    Forms\Components\RichEditor::make('mainStory')->required(),
                    Forms\Components\FileUpload::make('mainPhoto')->image()
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeTargetWidth('1920')
                        ->imageResizeTargetHeight('1080')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('mainPhoto')->rounded(),
                Tables\Columns\TextColumn::make('blogTitle'),
                Tables\Columns\TextColumn::make('blogSlug'),
                Tables\Columns\TextColumn::make('blogSummary'),
                Tables\Columns\TextColumn::make('categories.categoryName'),
                Tables\Columns\TextColumn::make('views'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ]);
    }
}
