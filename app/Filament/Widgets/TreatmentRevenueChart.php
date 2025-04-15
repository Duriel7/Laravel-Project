<?php

namespace App\Filament\Widgets;

use App\Models\Treatment;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class TreatmentRevenueChart extends ChartWidget
{
    protected static ?string $heading = 'Average Revenue (€/month)';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $treatments = Trend::model(Treatment::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->average('price');
        return [
            'datasets' => [
                [
                    'label' => 'Revenue',
                    'data' => $treatments->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $treatments->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
