<?php

namespace DevKokov\RotaPlanner\Condition\Week;

use DevKokov\RotaPlanner\Condition\WeekConditionInterface;
use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\RotaPlannerInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;

class ShiftsPerDaysOfWeek implements WeekConditionInterface
{
    private $days = [];

    public function getValidationLevel(): string
    {
        return self::VALIDATION_LEVEL_DAY;
    }

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

    public function validate(RotaPlannerInterface $rotaPlanner)
    {
        // TODO: Implement validate() method.
    }
}
