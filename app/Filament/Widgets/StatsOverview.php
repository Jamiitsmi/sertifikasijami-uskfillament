<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Peserta;
use App\Models\SkemaSertifikasi;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
         return [
            Stat::make('Total Peserta', Peserta::count())
                ->description('Jumlah seluruh peserta')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),

            Stat::make('Total Skema', SkemaSertifikasi::count())
                ->description('Jumlah skema tersedia')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('primary'),
        ];
    }
}
