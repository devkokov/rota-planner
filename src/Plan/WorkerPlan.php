<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Worker\WorkerInterface;

class WorkerPlan implements WorkerPlanInterface
{
    private $worker;
    private $hours;

    public function setWorker(WorkerInterface $worker)
    {
        $this->worker = $worker;
    }

    public function getWorker(): WorkerInterface
    {
        return $this->worker;
    }

    public function setHours(float $hours)
    {
        $this->hours = $hours;
    }

    public function getHours(): float
    {
        return $this->hours;
    }
}
