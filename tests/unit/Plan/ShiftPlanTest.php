<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\ShiftPlan;
use DevKokov\RotaPlanner\Plan\ShiftPlanInterface;
use DevKokov\RotaPlanner\Plan\WorkerPlanInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;
use PHPUnit\Framework\TestCase;

class ShiftPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new ShiftPlan(
            $this->getMockBuilder(ShiftInterface::class)->getMock()
        );
        $this->assertInstanceOf(ShiftPlanInterface::class, $plan);
    }

    public function testGetShift()
    {
        $shift = $this->getMockBuilder(ShiftInterface::class)->getMock();
        $plan = new ShiftPlan($shift);
        $this->assertEquals($shift, $plan->getShift());
    }

    public function testGetWorkerPlans()
    {
        $plan = new ShiftPlan(
            $this->getMockBuilder(ShiftInterface::class)->getMock()
        );
        $workerPlan = $this->getMockBuilder(WorkerPlanInterface::class)->getMock();
        $plan->addWorkerPlan($workerPlan);
        $this->assertEquals([$workerPlan], $plan->getWorkerPlans());
    }
}
