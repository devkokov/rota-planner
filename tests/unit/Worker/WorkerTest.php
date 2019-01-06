<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Worker;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Worker\Worker;
use DevKokov\RotaPlanner\Worker\WorkerInterface;
use DevKokov\RotaPlanner\Condition\WorkerConditionInterface;

class WorkerTest extends TestCase
{
    public function testClass()
    {
        $worker = new Worker();
        $this->assertInstanceOf(WorkerInterface::class, $worker);
    }

    public function testGetName()
    {
        $worker = new Worker();
        $worker->setName('Worker Name');

        $this->assertEquals('Worker Name', $worker->getName());
    }

    public function testGetConditions()
    {
        $worker = new Worker();

        $conditionBuilder = $this->getMockBuilder(\DevKokov\RotaPlanner\Condition\WorkerConditionInterface::class);
        $conditionA = $conditionBuilder->getMock();
        $conditionB = $conditionBuilder->getMock();

        $worker->addCondition($conditionA);
        $worker->addCondition($conditionB);

        $conditions = $worker->getConditions();

        $this->assertIsArray($conditions);
        $this->assertCount(2, $conditions);
        $this->assertContainsOnlyInstancesOf(\DevKokov\RotaPlanner\Condition\WorkerConditionInterface::class, $conditions);
        $this->assertContains($conditionA, $conditions);
        $this->assertContains($conditionB, $conditions);
    }
}
