<?php

namespace DevKokov\RotaPlanner\Tests\Unit;

use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\RotaPlanner;
use DevKokov\RotaPlanner\RotaPlannerInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;
use PHPUnit\Framework\TestCase;

class RotaPlannerTest extends TestCase
{
    public function testClass()
    {
        $rotaPlanner = new RotaPlanner();
        $this->assertInstanceOf(RotaPlannerInterface::class, $rotaPlanner);
    }

    public function testGetWeeks()
    {
        $rotaPlanner = new RotaPlanner();
        $week = $this->getMockBuilder(WeekInterface::class)->getMock();
        $rotaPlanner->setWeeks([$week]);
        $this->assertEquals([$week], $rotaPlanner->getWeeks());
    }

    public function testGetShifts()
    {
        $rotaPlanner = new RotaPlanner();
        $shift = $this->getMockBuilder(ShiftInterface::class)->getMock();
        $rotaPlanner->setShifts([$shift]);
        $this->assertEquals([$shift], $rotaPlanner->getShifts());
    }

    public function testGetWorkers()
    {
        $rotaPlanner = new RotaPlanner();
        $worker = $this->getMockBuilder(WorkerInterface::class)->getMock();
        $rotaPlanner->setWorkers([$worker]);
        $this->assertEquals([$worker], $rotaPlanner->getWorkers());
    }

    public function testGetWeekPlans()
    {
        $rotaPlanner = new RotaPlanner();
        $weekPlan = $this->getMockBuilder(WeekPlanInterface::class)->getMock();
        $rotaPlanner->addWeekPlan($weekPlan);
        $this->assertEquals([$weekPlan], $rotaPlanner->getWeekPlans());
    }
}
