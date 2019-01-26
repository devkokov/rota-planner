<?php

namespace DevKokov\RotaPlanner\Shift;

use DevKokov\RotaPlanner\Condition\ShiftConditionInterface;

interface ShiftInterface
{
    public function setName(string $name);
    public function getName(): string;
    public function setDuration(float $hours);
    public function getDuration(): float;
    public function setNumOfWorkers(int $workers);
    public function getNumOfWorkers(): int;
    public function addCondition(ShiftConditionInterface $condition);
    public function getConditions(): array;
}
