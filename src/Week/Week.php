<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Shift\ShiftInterface;
use DevKokov\RotaPlanner\Condition\WeekConditionInterface;

class Week implements WeekInterface
{
    private $shifts = [];
    private $conditions = [];

    public function addCondition(WeekConditionInterface $condition)
    {
        $this->conditions[] = $condition;
    }

    /**
     * @return WeekConditionInterface[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function addShift(ShiftInterface $shift)
    {
        $this->shifts[] = $shift;
    }

    public function removeShift(ShiftInterface $shift)
    {
        foreach ($this->shifts as $key => $savedShift) {
            if ($savedShift == $shift) {
                unset($this->shifts[$key]);
            }
        }
    }

    public function getShifts(): array
    {
        return $this->shifts;
    }
}
