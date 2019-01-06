<?php

namespace DevKokov\RotaPlanner\Week;

use DevKokov\RotaPlanner\Week\Condition\ConditionInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

class Week implements WeekInterface
{
    private $workers = [];
    private $conditions = [];

    public function addWorker(WorkerInterface $worker)
    {
        $this->workers[] = $worker;
    }

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array
    {
        return $this->workers;
    }

    public function addCondition(ConditionInterface $condition)
    {
        $this->conditions[] = $condition;
    }

    /**
     * @return ConditionInterface[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }
}
