<?php

namespace Example\Interfaces;

use Dapr\Actors\Attributes\DaprType;

#[DaprType('Count')]
interface CountInterface
{
    public function getCount(): int;

    public function incrementAndGet(int $amount = 1): int;
}
