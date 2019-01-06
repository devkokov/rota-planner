<?php

namespace DevKokov\RotaPlanner\Week\Condition;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;

class ShiftsPerDaysOfWeek implements ConditionInterface
{
    private $days = [];

    /**
     * @param DayInterface $day
     * @param ShiftInterface[] $shifts
     */
    public function addDay(DayInterface $day, array $shifts)
    {
        $this->days[get_class($day)] = $shifts;
    }

    public function removeDay(DayInterface $day)
    {
        unset($this->days[get_class($day)]);
    }

    /**
     * @return ShiftInterface[]
     */
    public function getDays(): array
    {
        return $this->days;
    }
}
