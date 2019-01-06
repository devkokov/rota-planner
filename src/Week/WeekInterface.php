<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Week\Condition\ConditionInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

interface WeekInterface
{
    public function addWorker(WorkerInterface $worker);

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array;

    public function addCondition(ConditionInterface $condition);

    /**
     * @return ConditionInterface[]
     */
    public function getConditions(): array;
}
