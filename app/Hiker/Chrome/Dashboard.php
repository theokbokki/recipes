<?php

namespace App\Hiker\Chrome;

use Hiker\Components\Header\Header;
use Hiker\Components\Layouts\Layout;
use Hiker\Components\Dashboard\DashboardConstructor;

class Dashboard extends DashboardConstructor
{
    /**
     * Return the dashboard components
     */
    protected function components(): array
    {
        return [
            Layout::make([
                Header::make()
                    ->title('Welcome back, '.auth()->user()->name),
            ])
        ];
    }
}
