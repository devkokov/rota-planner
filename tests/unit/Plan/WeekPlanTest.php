<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\DayPlanInterface;
use DevKokov\RotaPlanner\Plan\WeekPlan;
use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use PHPUnit\Framework\TestCase;

class WeekPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new WeekPlan();
        $this->assertInstanceOf(WeekPlanInterface::class, $plan);
    }

    public function testGetDayPlans()
    {
        $plan = new WeekPlan();
        $dayPlan = $this->getMockBuilder(DayPlanInterface::class)->getMock();
        $plan->addDayPlan($dayPlan);
        $this->assertEquals([$dayPlan], $plan->getDayPlans());
    }
}
