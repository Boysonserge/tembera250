<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogCommentResource\Pages;
use App\Filament\Resources\BlogCommentResource\RelationManagers;
use App\Models\BlogComment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use pxlrbt\FilamentExcel\Actions\ExportAction;

class BlogCommentResource extends Resource
{


    protected function getHeader(): View
    {
        return view('filament.settings.custom-header');
    }

    protected static ?string $model = BlogComment::class;

    protected static ?string $navigationIcon = 'heroicon-s-chat-alt';

    protected static ?int $navigationSort = 3;

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

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
                Tables\Columns\TextColumn::make('comment')
                    ->html()
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('my_blogs.blogTitle')
                    ->html()
                    ->label('Blog'),
                BooleanColumn::make('status')->label('Showing?')
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
            ])
            ->actions([
                Tables\Actions\Action::make('show')
                    ->action(fn (BlogComment $record) => $record->activate())
                    ->requiresConfirmation()
                    ->visible(fn (BlogComment $record): bool => $record->status ===0)

                    ->color('success'),
            ])
            ->filters([
                Filter::make('id')
                    ->query(fn (Builder $query): Builder => $query->orderBy('id', 'ASC')),
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
            ])
            ->bulkActions([
                ExportAction::make('export')
            ])->defaultSort('id','desc');

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
            'index' => Pages\ListBlogComments::route('/'),
        ];
    }
}
