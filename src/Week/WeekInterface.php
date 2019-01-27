<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;

interface WeekInterface
{
    /**
     * @param ShiftInterface[] $shifts
     */
    public function setShifts(array $shifts);

    /**
     * @return ShiftInterface[]
     */
    public function getShifts(): array;
    /**
     * @param DayInterface $day
     * @param ShiftInterface[] $shifts
     */
    public function setShiftsOn(DayInterface $day, array $shifts);

    /**
     * @param DayInterface $day
     * @return ShiftInterface[]|null
     */
    public function getShiftsOn(DayInterface $day);
}
