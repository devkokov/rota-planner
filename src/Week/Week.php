<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Condition\WeekConditionInterface;

class Week implements WeekInterface
{
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
}
