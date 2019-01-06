<?php

namespace DevKokov\RotaPlanner\Worker;

use DevKokov\RotaPlanner\Condition\WorkerConditionInterface;

interface WorkerInterface
{
    public function setName(string $name);
    public function getName(): string;
    public function addCondition(WorkerConditionInterface $condition);

    /**
     * @return \DevKokov\RotaPlanner\Condition\Worker\WorkerConditionInterface[]
     */
    public function getConditions(): array;
}
