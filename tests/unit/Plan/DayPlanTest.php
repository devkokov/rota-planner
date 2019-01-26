<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Plan\DayPlan;
use DevKokov\RotaPlanner\Plan\DayPlanInterface;
use DevKokov\RotaPlanner\Plan\ShiftPlanInterface;
use PHPUnit\Framework\TestCase;

class DayPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new DayPlan(
            $this->getMockBuilder(DayInterface::class)->getMock()
        );
        $this->assertInstanceOf(DayPlanInterface::class, $plan);
    }

    public function testGetDay()
    {
        $day = $this->getMockBuilder(DayInterface::class)->getMock();
        $plan = new DayPlan($day);
        $this->assertEquals($day, $plan->getDay());
    }

    public function testGetShiftPlans()
    {
        $plan = new DayPlan(
            $this->getMockBuilder(DayInterface::class)->getMock()
        );
        $shiftPlan = $this->getMockBuilder(ShiftPlanInterface::class)->getMock();
        $plan->addShiftPlan($shiftPlan);
        $this->assertEquals([$shiftPlan], $plan->getShiftPlans());
    }
}
