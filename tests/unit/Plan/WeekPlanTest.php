<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Plan\DayPlanInterface;
use DevKokov\RotaPlanner\Plan\WeekPlan;
use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;
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

    public function testAllocateHours()
    {
        $plan = new WeekPlan(
            $this->getMockBuilder(WeekInterface::class)->getMock()
        );
        $day1 = $this->getMockBuilder(DayInterface::class)->setMockClassName('Monday')->getMock();
        $day2 = $this->getMockBuilder(DayInterface::class)->setMockClassName('Tuesday')->getMock();
        $worker1 = $this->getMockBuilder(WorkerInterface::class)->getMock();
        $worker2 = $this->getMockBuilder(WorkerInterface::class)->getMock();

        $plan->allocateHours($worker1, $day1, 3.5);
        $plan->allocateHours($worker1, $day2, 4.5);
        $plan->allocateHours($worker2, $day1, 6);

        $this->assertEquals(8, $plan->getAllocatedHoursPerWeek($worker1));
        $this->assertEquals(6, $plan->getAllocatedHoursPerWeek($worker2));
        $this->assertEquals(3.5, $plan->getAllocatedHoursPerDay($worker1, $day1));
        $this->assertEquals(4.5, $plan->getAllocatedHoursPerDay($worker1, $day2));
    }
}
