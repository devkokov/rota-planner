<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Condition\Shift;

use DevKokov\RotaPlanner\Condition\ShiftConditionInterface;
use DevKokov\RotaPlanner\Day\Monday;
use DevKokov\RotaPlanner\Day\Sunday;
use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Condition\Shift\WorkersPerDaysOfWeek;

class WorkersPerDaysOfWeekTest extends TestCase
{
    public function testClass()
    {
        $condition = new WorkersPerDaysOfWeek();
        $this->assertInstanceOf(ShiftConditionInterface::class, $condition);
    }

    public function testAddDay()
    {
        $condition = new WorkersPerDaysOfWeek();

        $condition->addDay(new Monday(), 3);
        $condition->addDay(new Sunday(), 1);

        $days = $condition->getDays();

        $this->assertIsArray($days);
        $this->assertCount(2, $days);
        $this->assertEquals([
            Monday::class => 3,
            Sunday::class => 1
        ], $days);
    }

    public function testRemoveDay()
    {
        $condition = new WorkersPerDaysOfWeek();
        $condition->addDay(new Monday(), 2);
        $condition->removeDay(new Monday());

        $this->assertEmpty($condition->getDays());
    }
}
