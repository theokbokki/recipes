<?php

namespace App\Hiker\Resources\Recipes\Views;

use Hiker\Components\Btn\Btn;
use Hiker\Components\DataList\DataList;
use Hiker\Components\Header\Header;
use Hiker\Components\Layouts\Layout;
use Hiker\Components\Text\Text;
use Hiker\Nodes\ResourceTemplate;
use Hiker\Tracks\Trips\Trip;

class SingleView extends ResourceTemplate
{
    /**
     * Return the tab label
     *
     * @return string
     */
    public function label()
    {
        $this->resource->title;
    }

    /**
     * Return the template's components
     *
     * @return array
     */
    public function components(Trip $trip)
    {
        return [
            Layout::make([
                Header::make()
                    ->title($this->resource->title)
                    ->actions([
                        Btn::make()
                            ->label('Edit')
                            ->icon('edit')
                            ->flow($this->resource, 'edit'),
                        $this->resource->deleted_at
                            ? Btn::make()
                                ->label('Restore')
                                ->icon('reply')
                                ->flow($this->resource, 'restore')
                            : Btn::make()
                                ->label('Delete')
                                ->icon('trash')
                                ->flow($this->resource, 'delete'),
                    ])
                    ->extras([
                        Text::make($this->resource->description),
                    ]),

                DataList::make()
                    ->row('Ingredients', $this->resource->ingredients)
                    ->row('Steps', $this->resource->steps),
            ]),
        ];
    }
}
