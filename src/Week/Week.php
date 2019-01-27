<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;

class Week implements WeekInterface
{
    private $shifts = [];
    private $shiftsOn = [];

    /**
     * @param ShiftInterface[] $shifts
     */
    public function setShifts(array $shifts)
    {
        $this->shifts = $shifts;
    }

    /**
     * @return ShiftInterface[]
     */
    public function getShifts(): array
    {
        return $this->shifts;
    }

    public function setShiftsOn(DayInterface $day, array $shifts)
    {
        $this->shiftsOn[get_class($day)] = $shifts;
    }

    /**
     * @param DayInterface $day
     * @return ShiftInterface[]|null
     */
    public function getShiftsOn(DayInterface $day)
    {
        return $this->shiftsOn[get_class($day)] ?? null;
    }
}
