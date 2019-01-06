<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Week;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Week\Week;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Week\Condition\ConditionInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

class WeekTest extends TestCase
{
    public function testClass()
    {
        $week = new Week();
        $this->assertInstanceOf(WeekInterface::class, $week);
    }

    public function testGetConditions()
    {
        $week = new Week();

        $conditionBuilder = $this->getMockBuilder(ConditionInterface::class);
        $conditionA = $conditionBuilder->getMock();
        $conditionB = $conditionBuilder->getMock();

        $week->addCondition($conditionA);
        $week->addCondition($conditionB);

        $conditions = $week->getConditions();

        $this->assertIsArray($conditions);
        $this->assertCount(2, $conditions);
        $this->assertContainsOnlyInstancesOf(ConditionInterface::class, $conditions);
        $this->assertContains($conditionA, $conditions);
        $this->assertContains($conditionB, $conditions);
    }

    public function testGetWorkers()
    {
        $week = new Week();

        $workerBuilder = $this->getMockBuilder(WorkerInterface::class);
        $workerA = $workerBuilder->getMock();
        $workerB = $workerBuilder->getMock();

        $week->addWorker($workerA);
        $week->addWorker($workerB);

        $workers = $week->getWorkers();

        $this->assertIsArray($workers);
        $this->assertCount(2, $workers);
        $this->assertContainsOnlyInstancesOf(WorkerInterface::class, $workers);
        $this->assertContains($workerA, $workers);
        $this->assertContains($workerB, $workers);
    }
}
