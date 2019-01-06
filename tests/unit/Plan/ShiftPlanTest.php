<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\ShiftPlan;
use DevKokov\RotaPlanner\Plan\ShiftPlanInterface;
use DevKokov\RotaPlanner\Plan\WorkerPlanInterface;
use PHPUnit\Framework\TestCase;

class ShiftPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new ShiftPlan();
        $this->assertInstanceOf(ShiftPlanInterface::class, $plan);
    }

    public function testGetWorkerPlans()
    {
        $plan = new ShiftPlan();
        $workerPlan = $this->getMockBuilder(WorkerPlanInterface::class)->getMock();
        $plan->addWorkerPlan($workerPlan);
        $this->assertEquals([$workerPlan], $plan->getWorkerPlans());
    }
}
