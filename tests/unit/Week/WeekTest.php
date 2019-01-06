<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Week;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Week\Week;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Condition\WeekConditionInterface;

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

        $conditionBuilder = $this->getMockBuilder(WeekConditionInterface::class);
        $conditionA = $conditionBuilder->getMock();
        $conditionB = $conditionBuilder->getMock();

        $week->addCondition($conditionA);
        $week->addCondition($conditionB);

        $conditions = $week->getConditions();

        $this->assertIsArray($conditions);
        $this->assertCount(2, $conditions);
        $this->assertContainsOnlyInstancesOf(WeekConditionInterface::class, $conditions);
        $this->assertContains($conditionA, $conditions);
        $this->assertContains($conditionB, $conditions);
    }
}
