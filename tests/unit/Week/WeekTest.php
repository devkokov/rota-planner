<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Week;

use DevKokov\RotaPlanner\Shift\ShiftInterface;
use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Week\Week;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Condition\WeekConditionInterface;
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

        $conditionBuilder = $this->getMockBuilder(\DevKokov\RotaPlanner\Condition\WeekConditionInterface::class);
        $conditionA = $conditionBuilder->getMock();
        $conditionB = $conditionBuilder->getMock();

        $week->addCondition($conditionA);
        $week->addCondition($conditionB);

        $conditions = $week->getConditions();

        $this->assertIsArray($conditions);
        $this->assertCount(2, $conditions);
        $this->assertContainsOnlyInstancesOf(\DevKokov\RotaPlanner\Condition\WeekConditionInterface::class, $conditions);
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

    public function testGetShifts()
    {
        $week = new Week();

        $shiftBuilder = $this->getMockBuilder(ShiftInterface::class);
        $shiftA = $shiftBuilder->getMock();
        $shiftB = $shiftBuilder->getMock();

        $week->addShift($shiftA);
        $week->addShift($shiftB);

        $shifts = $week->getShifts();

        $this->assertIsArray($shifts);
        $this->assertCount(2, $shifts);
        $this->assertContainsOnlyInstancesOf(ShiftInterface::class, $shifts);
        $this->assertContains($shiftA, $shifts);
        $this->assertContains($shiftB, $shifts);
    }

    public function testRemoveShift()
    {
        $week = new Week();

        $shift = $this->getMockBuilder(ShiftInterface::class)->getMock();
        $week->addShift($shift);
        $week->removeShift($shift);

        $this->assertEmpty($week->getShifts());
    }
}
