<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Closure;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
class BlogResource extends Resource
{
    use WithFileUploads;
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';



    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


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
//                    TinyEditor::make('mainStory')->required(),
                    TinyEditor::make('mainStory')->height(300)->required(),
                    Forms\Components\FileUpload::make('mainPhoto')->image()
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
                Tables\Columns\TextColumn::make('blogTitle')
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        return $query
                            ->orderBy('id', $direction);
                    })
                    ->searchable()
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column contents exceeds the length limit.
                        return $state;
                    }),
                TextColumn::make('blogSlug')->searchable(),

                Tables\Columns\TextColumn::make('blogSummary')
                    ->searchable()
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column contents exceeds the length limit.
                        return $state;
                    }),
                Tables\Columns\TextColumn::make('categories.categoryName')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('views'),
                Tables\Columns\TextColumn::make('created_at')->since(),
            ])


            ->filters([

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
            ->defaultSort('id','desc');

    }


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\CommentsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
