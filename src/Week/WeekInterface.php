<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Shift\ShiftInterface;
use DevKokov\RotaPlanner\Condition\Week\WeekConditionInterface;
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
     * @return \DevKokov\RotaPlanner\Condition\\DevKokov\RotaPlanner\Condition\Week\WeekConditionInterface[]
     */
    public function getConditions(): array;

    public function addShift(ShiftInterface $shift);

    public function removeShift(ShiftInterface $shift);

    /**
     * @return ShiftInterface[]
     */
    public function getShifts(): array;
}
