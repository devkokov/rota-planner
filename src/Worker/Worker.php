<?php

namespace DevKokov\RotaPlanner\Worker;

use DevKokov\RotaPlanner\Condition\Worker\WorkerConditionInterface;

class Worker implements WorkerInterface
{
    private $name = '';
    private $conditions = [];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addCondition(WorkerConditionInterface $condition)
    {
        $this->conditions[] = $condition;
    }

    public function getConditions(): array
    {
        return $this->conditions;
    }
}
