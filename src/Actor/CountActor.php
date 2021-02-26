<?php

namespace Example\Actor;

use Dapr\Actors\Actor;
use Dapr\Actors\Attributes\DaprType;
use Example\Interfaces\CountInterface;

#[DaprType('Count')]
class CountActor extends Actor implements CountInterface
{
    public function __construct(string $id, private CountState $state)
    {
        parent::__construct($id);
    }

    public function getCount(): int
    {
        return $this->state->count;
    }

    public function incrementAndGet(int $amount = 1): int
    {
        return $this->state->count += $amount;
    }
}
