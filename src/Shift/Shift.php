<?php

namespace DevKokov\RotaPlanner\Shift;

use DevKokov\RotaPlanner\Condition\ShiftConditionInterface;

class Shift implements ShiftInterface
{
    private $name = '';
    private $duration = 0;
    private $numOfWorkers = 0;
    private $conditions;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDuration(float $hours)
    {
        $this->duration = $hours;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function setNumOfWorkers(int $workers)
    {
        $this->numOfWorkers = $workers;
    }

    public function getNumOfWorkers(): int
    {
        return $this->numOfWorkers;
    }

    public function addCondition(ShiftConditionInterface $condition)
    {
        $this->conditions[] = $condition;
    }

    /**
     * @return ShiftConditionInterface[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }
}
