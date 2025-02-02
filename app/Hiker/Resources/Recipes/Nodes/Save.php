<?php

namespace App\Hiker\Resources\Recipes\Nodes;

use Hiker\Tracks\Node;
use Hiker\Tracks\Nodes\Saveable;
use Hiker\Tracks\Trips\Trip;

class Save extends Node implements Saveable
{
    protected $model;

    /**
     * Run the instanciated node.
     *
     * @param \Hiker\Tracks\Trip $trip
     * @return void
     */
    public function execute(Trip $trip)
    {
        $bag = $trip->baggage();

        $this->model = $trip->resource()->modelOrNew();
        $this->model->title = $bag->title;
        $this->model->description = $bag->description;
        $this->model->ingredients = $bag->ingredients;
        $this->model->steps = $bag->steps;
        $this->model->save();
    }

    public function model()
    {
        return $this->model;
    }
}
