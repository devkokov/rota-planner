<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\WorkerPlan;
use DevKokov\RotaPlanner\Plan\WorkerPlanInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;
use PHPUnit\Framework\TestCase;

class WorkerPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new WorkerPlan(
            $this->getMockBuilder(WorkerInterface::class)->getMock()
        );
        $this->assertInstanceOf(WorkerPlanInterface::class, $plan);
    }

    public function testGetWorker()
    {
        $plan = new WorkerPlan(
            $this->getMockBuilder(WorkerInterface::class)->getMock()
        );
        $worker = $this->getMockBuilder(WorkerInterface::class)->getMock();
        $this->assertEquals($worker, $plan->getWorker());
    }

    public function testGetHours()
    {
        $plan = new WorkerPlan(
            $this->getMockBuilder(WorkerInterface::class)->getMock()
        );
        $plan->setHours(2.5);
        $this->assertEquals(2.5, $plan->getHours());
    }
}
