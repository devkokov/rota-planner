<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Shift;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Shift\Shift;
use DevKokov\RotaPlanner\Shift\ShiftInterface;

class ShiftTest extends TestCase
{
    public function testClass()
    {
        $shift = new Shift();
        $this->assertInstanceOf(ShiftInterface::class, $shift);
    }

    public function testGetName()
    {
        $shift = new Shift();
        $shift->setName('Shift 1');

        $this->assertEquals('Shift 1', $shift->getName());
    }

    public function testGetDuration()
    {
        $shift = new Shift();
        $shift->setDuration(3.5);

        $this->assertEquals(3.5, $shift->getDuration());
    }
}
