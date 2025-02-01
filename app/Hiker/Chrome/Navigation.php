<?php

namespace App\Hiker\Chrome;

use App\Hiker\Resources\Recipes\Recipe;
use Hiker\Components\Icon\Icon;
use Hiker\Components\Navigation\Link;
use Hiker\Components\Navigation\NavigationConstructor;

class Navigation extends NavigationConstructor
{

    /**
     * Return the navigation items
     *
     * @return array
     */
    protected function items() : array
    {
        return [
            Link::resource(Recipe::class),
        ];
    }

    /**
     * Return the sticky navigation items
     *
     * @return array
     */
    protected function sticky() : array
    {
        return [
            //
        ];
    }

}
