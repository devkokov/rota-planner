<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Worker\Condition;

use DevKokov\RotaPlanner\Day\Monday;
use DevKokov\RotaPlanner\Day\Sunday;
use DevKokov\RotaPlanner\Day\Tuesday;
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

    public function testCanWorkByDefault()
    {
        $condition = new DaysOfWeek();

        $this->assertTrue($condition->canWorkByDefault);

        $condition->canWorkByDefault = false;

        $this->assertFalse($condition->canWorkByDefault);
    }

    public function testAddDay()
    {
        $condition = new DaysOfWeek();

        $condition->addDay(new Monday(), true);
        $condition->addDay(new Sunday(), false);

        $days = $condition->getDays();

        $this->assertIsArray($days);
        $this->assertCount(2, $days);
        $this->assertEquals([
            Monday::class => true,
            Sunday::class => false
        ], $days);
    }

    public function testRemoveDay()
    {
        $condition = new DaysOfWeek();
        $condition->addDay(new Monday(), false);
        $condition->removeDay(new Monday());

        $this->assertEmpty($condition->getDays());
    }

    public function testGetCanWorkOn()
    {
        $condition = new DaysOfWeek();
        $condition->addDay(new Monday(), false);

        $this->assertFalse($condition->getCanWorkOn(new Monday()));
        $this->assertTrue($condition->getCanWorkOn(new Tuesday()));
    }
}
