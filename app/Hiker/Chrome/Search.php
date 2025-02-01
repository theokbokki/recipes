<?php

namespace App\Hiker\Chrome;

use Hiker\Components\Search\SearchItem;
use Hiker\Components\Search\SearchContext;
use Hiker\Components\Search\SearchConstructor;

class Search extends SearchConstructor
{
    /**
     * Return the regular navigation links
     *
     * @return array
     */
    protected function contexts() : array
    {
        return [
            SearchContext::make('*', 'Everything')
                ->keystrokes(['meta', 'p'])
                ->default()
                ->resources([]),
        ];
    }

    /**
     * Get the list of recent searches
     *
     * @return array
     */
    public function recent(): array
    {
        return [];
    }
}
