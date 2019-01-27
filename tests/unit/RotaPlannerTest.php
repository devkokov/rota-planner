<?php

namespace DevKokov\RotaPlanner\Tests\Unit;

use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\RotaPlanner;
use DevKokov\RotaPlanner\RotaPlannerInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;
use PHPUnit\Framework\TestCase;

class RotaPlannerTest extends TestCase
{
    private function getRotaPlannerInstance(): RotaPlanner
    {
        $week = $this->getMockBuilder(WeekInterface::class)->getMock();
        $rotaPlanner = new RotaPlanner($week, []);
        return $rotaPlanner;
    }

    public function testClass()
    {
        $this->assertInstanceOf(RotaPlannerInterface::class, $this->getRotaPlannerInstance());
    }

    public function testGetWeek()
    {
        $week = $this->getMockBuilder(WeekInterface::class)->getMock();
        $rotaPlanner = new RotaPlanner($week, []);
        $this->assertEquals($week, $rotaPlanner->getWeek());
    }

    public function testGetWorkers()
    {
        $week = $this->getMockBuilder(WeekInterface::class)->getMock();
        $worker = $this->getMockBuilder(WorkerInterface::class)->getMock();
        $rotaPlanner = new RotaPlanner($week, [$worker]);
        $this->assertEquals([$worker], $rotaPlanner->getWorkers());
    }

    public function testGetWeekPlan()
    {
        $rotaPlanner = $this->getRotaPlannerInstance();
        $weekPlan = $this->getMockBuilder(WeekPlanInterface::class)->getMock();
        $rotaPlanner->setWeekPlan($weekPlan);
        $this->assertEquals($weekPlan, $rotaPlanner->getWeekPlan());
    }
}
