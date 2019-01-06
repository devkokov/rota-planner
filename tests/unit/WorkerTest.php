<?php

namespace DevKokov\RotaPlanner\Tests\Unit;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Worker\Worker;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

class WorkerTest extends TestCase
{
    public function testClass()
    {
        $worker = new Worker();
        $this->assertInstanceOf(WorkerInterface::class, $worker);
    }

    public function testGetName()
    {
        $worker = new Worker();
        $worker->setName('Worker Name');

        $this->assertEquals('Worker Name', $worker->getName());
    }
}
