<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Livewire\Livewire;

class FanChartPage extends Page
{
    protected static string $view = 'livewire.fan-chart';

    protected static ?string $resource = null;

    protected static ?string $title = ' Fan Charts';

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    public function getTitle(): string
    {
        return static::$title;
    }

    public static function getNavigationIcon(): string
    {
        return static::$navigationIcon;
    }

    public function mount(): void
    {
        Livewire::mount(\App\Http\Livewire\FanChart::class);
    }
}
