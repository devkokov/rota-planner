<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\DayPlan;
use DevKokov\RotaPlanner\Plan\DayPlanInterface;
use DevKokov\RotaPlanner\Plan\ShiftPlanInterface;
use PHPUnit\Framework\TestCase;

class DayPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new DayPlan();
        $this->assertInstanceOf(DayPlanInterface::class, $plan);
    }

    public function testGetShiftPlans()
    {
        $plan = new DayPlan();
        $shiftPlan = $this->getMockBuilder(ShiftPlanInterface::class)->getMock();
        $plan->addShiftPlan($shiftPlan);
        $this->assertEquals([$shiftPlan], $plan->getShiftPlans());
    }
}
