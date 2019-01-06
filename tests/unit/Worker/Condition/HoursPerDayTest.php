<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Worker\Condition;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Condition\WorkerConditionInterface;
use DevKokov\RotaPlanner\Condition\Worker\HoursPerDay;

class HoursPerDayTest extends TestCase
{
    public function testClass()
    {
        $condition = new HoursPerDay();
        $this->assertInstanceOf(WorkerConditionInterface::class, $condition);
    }

    public function testDefaultValues()
    {
        $condition = new HoursPerDay();

        $this->assertEquals(0, $condition->getMin());
        $this->assertEquals(0, $condition->getMax());
    }

    public function testSetValue()
    {
        $condition = new HoursPerDay();

        $condition->setMin(10.5);
        $condition->setMax(30.5);

        $this->assertEquals(10.5, $condition->getMin());
        $this->assertEquals(30.5, $condition->getMax());
    }
}
