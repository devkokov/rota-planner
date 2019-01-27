<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Week;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;
use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Week\Week;
use DevKokov\RotaPlanner\Week\WeekInterface;

class WeekTest extends TestCase
{
    public function testClass()
    {
        $week = new Week();
        $this->assertInstanceOf(WeekInterface::class, $week);
    }

    public function testGetShifts()
    {
        $week = new Week();
        $shifts = [$this->getMockBuilder(ShiftInterface::class)->getMock()];
        $week->setShifts($shifts);
        $this->assertEquals($shifts, $week->getShifts());
    }

    public function testGetShiftsOn()
    {
        $week = new Week();
        $day = $this->getMockBuilder(DayInterface::class)->getMock();
        $this->assertNull($week->getShiftsOn($day));
        $shifts = [$this->getMockBuilder(ShiftInterface::class)->getMock()];
        $week->setShiftsOn($day, $shifts);
        $this->assertEquals($shifts, $week->getShiftsOn($day));
    }
}
