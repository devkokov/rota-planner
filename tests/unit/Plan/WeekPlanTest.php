<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\DayPlanInterface;
use DevKokov\RotaPlanner\Plan\WeekPlan;
use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use PHPUnit\Framework\TestCase;

class WeekPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new WeekPlan(
            $this->getMockBuilder(WeekInterface::class)->getMock()
        );
        $this->assertInstanceOf(WeekPlanInterface::class, $plan);
    }

    public function testGetWeek()
    {
        $week = $this->getMockBuilder(WeekInterface::class)->getMock();
        $plan = new WeekPlan($week);
        $this->assertEquals($week, $plan->getWeek());
    }

    public function testGetDayPlans()
    {
        $plan = new WeekPlan(
            $this->getMockBuilder(WeekInterface::class)->getMock()
        );
        $dayPlan = $this->getMockBuilder(DayPlanInterface::class)->getMock();
        $plan->addDayPlan($dayPlan);
        $this->assertEquals([$dayPlan], $plan->getDayPlans());
    }
}
