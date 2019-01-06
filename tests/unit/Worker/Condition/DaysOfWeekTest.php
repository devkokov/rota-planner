<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Worker\Condition;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Worker\Condition\ConditionInterface;
use DevKokov\RotaPlanner\Worker\Condition\DaysOfWeek;

class DaysOfWeekTest extends TestCase
{
    public function testClass()
    {
        $condition = new DaysOfWeek();
        $this->assertInstanceOf(ConditionInterface::class, $condition);
    }

    public function testDefaultValues()
    {
        $condition = new DaysOfWeek();

        $this->assertTrue($condition->monday);
        $this->assertTrue($condition->tuesday);
        $this->assertTrue($condition->wednesday);
        $this->assertTrue($condition->thursday);
        $this->assertTrue($condition->friday);
        $this->assertTrue($condition->saturday);
        $this->assertTrue($condition->sunday);
    }

    public function testSetValue()
    {
        $condition = new DaysOfWeek();

        $condition->monday = false;

        $this->assertFalse($condition->monday);
    }
}
