<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Week\Condition;

use DevKokov\RotaPlanner\Condition\WeekConditionInterface;
use DevKokov\RotaPlanner\Day\Monday;
use DevKokov\RotaPlanner\Day\Sunday;
use DevKokov\RotaPlanner\Shift\ShiftInterface;
use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Condition\Week\ShiftsPerDaysOfWeek;

class ShiftsPerDaysOfWeekTest extends TestCase
{
    public function testClass()
    {
        $condition = new ShiftsPerDaysOfWeek();
        $this->assertInstanceOf(WeekConditionInterface::class, $condition);
    }

    public function testAddDay()
    {
        $condition = new ShiftsPerDaysOfWeek();

        $shiftBuilder = $this->getMockBuilder(ShiftInterface::class);
        $shiftA = $shiftBuilder->getMock();
        $shiftB = $shiftBuilder->getMock();

        $condition->addDay(new Monday(), [$shiftA, $shiftB]);
        $condition->addDay(new Sunday(), [$shiftA]);

        $days = $condition->getDays();

        $this->assertIsArray($days);
        $this->assertCount(2, $days);
        $this->assertEquals([
            Monday::class => [$shiftA, $shiftB],
            Sunday::class => [$shiftA]
        ], $days);
    }

    public function testRemoveDay()
    {
        $condition = new ShiftsPerDaysOfWeek();
        $condition->addDay(new Monday(), [$this->getMockBuilder(ShiftInterface::class)->getMock()]);
        $condition->removeDay(new Monday());

        $this->assertEmpty($condition->getDays());
    }
}
