<?php

namespace App\Filament\Widgets;

use App\Models\Treatment;
use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class TreatmentsChart extends ChartWidget
{
    protected static ?string $heading = 'Treatment Number';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $treatments = Trend::model(Treatment::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        $revenues = Trend::model(Treatment::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->sum('price');
        return [
            'datasets' => [
                [
                    'label' => 'Treatments',
                    'data' => $treatments->map(fn (TrendValue $value) => $value->aggregate),
                    'borderColor' => 'rgba(75,192,192,1)',
                    'backgroundColor' => 'rgba(75,192,192,1)',
                    'pointBorderColor' => 'rgba(75,192,192,1)',
                    'pointBackgroundColor' => 'rgba(75,192,192,1)',
                    'yAxisID' => 'y',
                ],
                [
                    'label' => 'Revenues (€)',
                    'data' => $revenues->map(fn (TrendValue $value) => $value->aggregate),
                    'borderColor' => 'rgba(255,159,64,1)',
                    'backgroundColor' => 'rgba(255,159,64,1)',
                    'pointBorderColor' => 'rgba(255,159,64,1)',
                    'pointBackgroundColor' => 'rgba(255,159,64,1)',
                    'yAxisID' => 'y1',
                ],
            ],
            'labels' => $treatments->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Treatment number',
                    ],
                    'position' => 'right',
                ],
                'y1' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Treatment revenues',
                    ],
                    'position' => 'left',
                    'grid' => [
                        'drawOnChartArea' => false,
                    ],
                ],
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Months',
                    ],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
