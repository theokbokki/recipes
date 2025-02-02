<?php

namespace App\Hiker\Resources\Recipes\Forms;

use Hiker\Components\Editor\Step;
use Hiker\Components\Fields\Text\Text;
use Hiker\Components\Fields\Wysiwyg\Wysiwyg;
use Hiker\Nodes\Form;
use Hiker\Tracks\Baggage;

class RecipeForm extends Form
{
    /**
     * Get the form's subject line
     *
     * @return string
     */
    public function subject()
    {
        if ($this->trip->roadmap()->flow === 'draft') {
            return 'Create a new recipe';
        }

        return 'Edit recipe';
    }

    /**
     * Get the form's steps
     *
     * @param \Hiker\Tracks\Baggage $bag
     * @return array
     */
    public function steps(Baggage $bag)
    {
        return [
            Step::make($this->subject(), 'general')
                ->fields([
                    Text::make('Title', 'title')
                        ->rules('required'),

                    Text::make('Description', 'description')
                        ->rules('required'),

                    Wysiwyg::make('Ingredients', 'ingredients')
                        ->rules('required'),

                    Wysiwyg::make('Steps', 'steps')
                        ->rules('required'),
                ])
        ];
    }
}
