<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Patient::query()->where('species', 'cat')->count()),
            Stat::make('Dogs', Patient::query()->where('species', 'dog')->count()),
            Stat::make('Rabbits', Patient::query()->where('species', 'rabbit')->count()),
        ];
    }
}
