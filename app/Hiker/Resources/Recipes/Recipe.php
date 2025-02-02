<?php

namespace App\Hiker\Resources\Recipes;

use App\Hiker\Resources\Recipes\Attributes\Description;
use App\Hiker\Resources\Recipes\Attributes\Title;
use Hiker\Components\Icon\Icon;
use Hiker\Resource;

class Recipe extends Resource
{
    /**
     * Get the resource singular display label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Recipe';
    }

    /**
     * Get the resource plural display label
     *
     * @return string
     */
    public static function pluralLabel()
    {
        return 'Recipes';
    }

    /**
     * Get the resource's default icon
     *
     * @return null|string
     */
    public static function icon()
    {
        return Icon::make('book-open');
    }

    /**
     * Get the full list of available columns for display
     *
     * @return array
     */
    public static function getAvailableColumns(): array
    {
        return [
            Title::class,
            Description::class,
        ];
    }

    /**
     * Get the columns to be displayed by default
     *
     * @return array
     */
    public static function getDefaultColumns(): array
    {
        return ['title', 'description'];
    }

    /**
     * Get the default order by config
     *
     * @return string
     */
    public static function getDefaultOrderColumn(): string
    {
        return 'title';
    }
}
