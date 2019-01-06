<?php

namespace DevKokov\RotaPlanner\Tests\Unit\Day;

use PHPUnit\Framework\TestCase;
use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Day\Monday;
use DevKokov\RotaPlanner\Day\Tuesday;
use DevKokov\RotaPlanner\Day\Wednesday;
use DevKokov\RotaPlanner\Day\Thursday;
use DevKokov\RotaPlanner\Day\Friday;
use DevKokov\RotaPlanner\Day\Saturday;
use DevKokov\RotaPlanner\Day\Sunday;

class DaysTest extends TestCase
{
    public function testDays()
    {
        $dayClasses = [
            Monday::class,
            Tuesday::class,
            Wednesday::class,
            Thursday::class,
            Friday::class,
            Saturday::class,
            Sunday::class
        ];

        foreach ($dayClasses as $dayClass) {
            $day = new $dayClass();
            $this->assertInstanceOf(DayInterface::class, $day);
        }
    }
}
