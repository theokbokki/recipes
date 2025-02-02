<?php

namespace App\Hiker\Resources\Recipes\Nodes;

use Hiker\Tracks\Node;
use Hiker\Tracks\Nodes\Deleteable;
use Hiker\Tracks\Trips\Trip;

class Restore extends Node implements Deleteable
{
    /**
     * Run the instanciated node.
     *
     * @param \Hiker\Tracks\Trip $trip
     * @return void
     */
    public function execute(Trip $trip)
    {
        $trip->resource()->model()->restore();
    }
}
