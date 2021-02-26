<?php

require_once __DIR__.'/../vendor/autoload.php';

use Example\Actor\CountActor;
use Example\Actor\CountState;

class CountTest extends \PHPUnit\Framework\TestCase {
    public CountState $state;
    public CountActor $actor;

    public function setUp(): void
    {
        parent::setUp();
        $container = new \DI\Container();
        $this->state = new CountState($container, $container);
        $this->actor = new CountActor(uniqid(), $this->state);
    }

    public function testInitialCount() {
        $this->assertSame(0, $this->actor->getCount(), 'initial value should be 0');
    }

    public function testGetCount() {
        $this->state->count = 4;
        $this->assertSame(4, $this->actor->getCount(), 'it should not change the count');
    }

    public function testIncrementFromZero() {
        $this->assertSame(1, $this->actor->incrementAndGet(), 'increment by 1 should return 1');
        $this->assertSame(1, $this->actor->getCount(), 'the count should not change');
    }

    public function testIncrementAmount() {
        $this->assertSame(4, $this->actor->incrementAndGet(4), 'incrementing by 4 should result in 4 + 0');
        $this->assertSame(4, $this->actor->getCount(), 'the count should not change');
    }
}
