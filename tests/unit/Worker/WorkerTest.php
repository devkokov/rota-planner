<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Worker;

use DevKokov\RotaPlanner\Day\DayInterface;
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

    public function testGetCanWorkOnDefault()
    {
        $worker = new Worker();
        $worker->setCanWorkOnDefault(false);
        $this->assertFalse($worker->getCanWorkOnDefault());
    }

    public function testGetCanWorkOn()
    {
        $worker = new Worker();
        $day = $this->getMockBuilder(DayInterface::class)->getMock();
        $worker->setCanWorkOn($day, false);
        $this->assertFalse($worker->getCanWorkOn($day));
    }

    public function testGetMinHoursPerDay()
    {
        $worker = new Worker();
        $worker->setMinHoursPerDay(2);
        $this->assertIsFloat($worker->getMinHoursPerDay());
        $this->assertEquals(2, $worker->getMinHoursPerDay());
    }

    public function testGetMaxHoursPerDay()
    {
        $worker = new Worker();
        $worker->setMaxHoursPerDay(2);
        $this->assertIsFloat($worker->getMaxHoursPerDay());
        $this->assertEquals(2, $worker->getMaxHoursPerDay());
    }

    public function testGetMinHoursPerWeek()
    {
        $worker = new Worker();
        $worker->setMinHoursPerWeek(2);
        $this->assertIsFloat($worker->getMinHoursPerWeek());
        $this->assertEquals(2, $worker->getMinHoursPerWeek());
    }

    public function testGetMaxHoursPerWeek()
    {
        $worker = new Worker();
        $worker->setMaxHoursPerWeek(2);
        $this->assertIsFloat($worker->getMaxHoursPerWeek());
        $this->assertEquals(2, $worker->getMaxHoursPerWeek());
    }
}
