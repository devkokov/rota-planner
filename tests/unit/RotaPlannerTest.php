<?php

namespace DevKokov\RotaPlanner\Tests\Unit;

use DevKokov\RotaPlanner\RotaPlanner;
use DevKokov\RotaPlanner\RotaPlannerInterface;
use PHPUnit\Framework\TestCase;

class RotaPlannerTest extends TestCase
{
    public function testClass()
    {
        $rotaPlanner = new RotaPlanner();
        $this->assertInstanceOf(RotaPlannerInterface::class, $rotaPlanner);
    }
}
