<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\ShiftPlan;
use PHPUnit\Framework\TestCase;

class ShiftPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new ShiftPlan();
        $this->assertInstanceOf(ShiftPlan::class, $plan);
    }
}
