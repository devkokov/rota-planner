<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Shift\ShiftInterface;

/**
 * Class ShiftPlan
 * @package DevKokov\RotaPlanner\Plan
 *
 * Representation of a planned shift
 */
class ShiftPlan implements ShiftPlanInterface
{
    private $shift;
    private $workerPlans = [];

    public function __construct(ShiftInterface $shift)
    {
        $this->shift = $shift;
    }

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
