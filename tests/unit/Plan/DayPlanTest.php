<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\DayPlan;
use PHPUnit\Framework\TestCase;

class DayPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new DayPlan();
        $this->assertInstanceOf(DayPlan::class, $plan);
    }
}
