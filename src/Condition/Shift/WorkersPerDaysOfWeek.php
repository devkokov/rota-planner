<?php

namespace DevKokov\RotaPlanner\Condition\Shift;

use DevKokov\RotaPlanner\Condition\ShiftConditionInterface;
use DevKokov\RotaPlanner\Day\DayInterface;

class WorkersPerDaysOfWeek implements ShiftConditionInterface
{
    private $days = [];

    public function getValidationLevel(): string
    {
        return self::VALIDATION_LEVEL_SHIFT;
    }

    public function addDay(DayInterface $day, int $workers)
    {
        $this->days[get_class($day)] = $workers;
    }

    public function removeDay(DayInterface $day)
    {
        unset($this->days[get_class($day)]);
    }

    /**
     * @return int[]
     */
    public function getDays(): array
    {
        return $this->days;
    }
}
