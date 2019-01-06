<?php

namespace DevKokov\RotaPlanner\Plan;

/**
 * Class DayPlan
 * @package DevKokov\RotaPlanner\Plan
 *
 * Representation of a planned day
 */
class DayPlan implements DayPlanInterface
{
    private $shiftPlans = [];

    public function addShiftPlan(ShiftPlanInterface $shiftPlan)
    {
        $this->shiftPlans[] = $shiftPlan;
    }

    /**
     * @return ShiftPlanInterface[]
     */
    public function getShiftPlans(): array
    {
        return $this->shiftPlans;
    }
}
