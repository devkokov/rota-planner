<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Worker\Condition;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Condition\Worker\WorkerConditionInterface;
use DevKokov\RotaPlanner\Condition\Worker\HoursPerWeek;

class HoursPerWeekTest extends TestCase
{
    public function testClass()
    {
        $condition = new HoursPerWeek();
        $this->assertInstanceOf(\DevKokov\RotaPlanner\Condition\Worker\WorkerConditionInterface::class, $condition);
    }

    public function testDefaultValues()
    {
        $condition = new HoursPerWeek();

        $this->assertEquals(0, $condition->getMin());
        $this->assertEquals(0, $condition->getMax());
    }

    public function testSetValue()
    {
        $condition = new HoursPerWeek();

        $condition->setMin(10.5);
        $condition->setMax(30.5);

        $this->assertEquals(10.5, $condition->getMin());
        $this->assertEquals(30.5, $condition->getMax());
    }
}
