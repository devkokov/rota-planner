<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Condition\WeekConditionInterface;

interface WeekInterface
{
    public function addCondition(WeekConditionInterface $condition);

    /**
     * @return WeekConditionInterface[]
     */
    public function getConditions(): array;
}
