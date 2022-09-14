<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Uploaded blogs', Blog::query()->count())
                ->description('AVAILABLE')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Card::make('Comments', BlogComment::query()->count())
                ->description('AVAILABLE')
                ->descriptionIcon('heroicon-s-trending-down')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),

            Card::make('Blog categories', Category::query()->count())
                ->description('AVAILABLE')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
