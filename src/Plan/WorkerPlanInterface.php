<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Worker\WorkerInterface;

interface WorkerPlanInterface
{
    public function __construct(WorkerInterface $worker);

    public function getWorker(): WorkerInterface;

    public function setHours(float $hours);

    public function getHours(): float;
}
