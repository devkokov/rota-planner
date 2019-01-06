<?php

namespace DevKokov\RotaPlanner\Worker;

use DevKokov\RotaPlanner\Worker\Condition\ConditionInterface;

interface WorkerInterface
{
    public function setName(string $name);
    public function getName(): string;
    public function addCondition(ConditionInterface $condition);

    /**
     * @return ConditionInterface[]
     */
    public function getConditions(): array;
}
