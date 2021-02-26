<?php

namespace Example\Actor;

use Dapr\Actors\ActorState;

class CountState extends ActorState
{
    public int $count = 0;
}
