<?php

namespace DevKokov\RotaPlanner\Plan;

/**
 * Class ShiftPlan
 * @package DevKokov\RotaPlanner\Plan
 *
 * Representation of a planned shift
 */
class ShiftPlan implements ShiftPlanInterface
{
    private $workerPlans = [];

    public function addWorkerPlan(WorkerPlanInterface $workerPlan)
    {
        $this->workerPlans[] = $workerPlan;
    }

    /**
     * @return WorkerPlanInterface[]
     */
    public function getWorkerPlans(): array
    {
        return $this->workerPlans;
    }
}
