<?php

namespace DevKokov\RotaPlanner\Plan;

interface ShiftPlanInterface
{
    public function addWorkerPlan(WorkerPlanInterface $workerPlan);

    /**
     * @return WorkerPlanInterface[]
     */
    public function getWorkerPlans(): array;
}
