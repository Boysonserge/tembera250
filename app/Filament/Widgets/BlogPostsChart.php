<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Forms\Components\Card;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BlogPostsChart extends LineChartWidget
{
    protected static ?string $heading = 'Blog posts';
    protected static ?int $sort=2;
    /**
     * @var string|int|array
     */
    protected  string|int|array $columnSpan=2;

    protected function getData(): array
    {

            $data = Trend::model(Blog::class)
                ->between(
                    start: now()->startOfYear(),
                    end: now(),
                )
                ->perMonth()
                ->count();



        return [
            'datasets' => [
                [
                    'label' => 'Blog posts',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),

                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
