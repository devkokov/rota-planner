<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Plan;

use DevKokov\RotaPlanner\Plan\WeekPlan;
use PHPUnit\Framework\TestCase;

class WeekPlanTest extends TestCase
{
    public function testClass()
    {
        $plan = new WeekPlan();
        $this->assertInstanceOf(WeekPlan::class, $plan);
    }
}
