<?php

namespace DevKokov\RotaPlanner\Condition\Worker;

class HoursPerWeek implements WorkerConditionInterface
{
    private $min = 0;
    private $max = 0;

    public function getMin(): float
    {
        return $this->min;
    }

    public function setMin(float $min)
    {
        $this->min = $min;
    }

    public function getMax(): float
    {
        return $this->max;
    }

    public function setMax(float $max)
    {
        $this->max = $max;
    }
}
