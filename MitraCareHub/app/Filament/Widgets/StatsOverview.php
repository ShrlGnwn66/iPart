<?php

namespace App\Filament\Widgets;

use App\Models\MitraCareHub;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(label:'Total Laporan Keluhan', value: MitraCareHub::count()),
            Stat::make(label:'Laporan Dalam Proses', value: MitraCareHub::where('status', '0')->count()),
            Stat::make(label:'Laporan Selesai', value: MitraCareHub::where('status', '1')->count()),
        ];
    }
}
