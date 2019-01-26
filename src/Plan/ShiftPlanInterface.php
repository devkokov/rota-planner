<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Shift\ShiftInterface;

interface ShiftPlanInterface
{
    public function __construct(ShiftInterface $shift);

    public function getShift(): ShiftInterface;

    public function addWorkerPlan(WorkerPlanInterface $workerPlan);

    /**
     * @return WorkerPlanInterface[]
     */
    public function getWorkerPlans(): array;
}
