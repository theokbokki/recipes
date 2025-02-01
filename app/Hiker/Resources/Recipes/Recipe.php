<?php

namespace App\Hiker\Resources\Recipes;

use Hiker\Components\Icon\Icon;
use Hiker\Components\Text\Text;
use Hiker\Resource;
use Hiker\Structures\Archive\Attribute;

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
            Attribute::make('id', 'ID', function ($resource) {
                return Text::make($resource->id);
            }),
        ];
    }

    /**
     * Get the columns to be displayed by default
     *
     * @return array
     */
    public static function getDefaultColumns(): array
    {
        return ['id'];
    }

    /**
     * Get the default order by config
     *
     * @return string
     */
    public static function getDefaultOrderColumn(): string
    {
        return 'id';
    }
}
