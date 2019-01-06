<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Shift\ShiftInterface;
use DevKokov\RotaPlanner\Condition\WeekConditionInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

interface WeekInterface
{
    public function addWorker(WorkerInterface $worker);

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array;

    public function addCondition(WeekConditionInterface $condition);

    /**
     * @return WeekConditionInterface[]
     */
    public function getConditions(): array;

    public function addShift(ShiftInterface $shift);

    public function removeShift(ShiftInterface $shift);

    /**
     * @return ShiftInterface[]
     */
    public function getShifts(): array;
}
