<?php

namespace DevKokov\RotaPlanner\Plan;

interface DayPlanInterface
{
    public function addShiftPlan(ShiftPlanInterface $shiftPlan);

    /**
     * @return ShiftPlanInterface[]
     */
    public function getShiftPlans(): array;
}
