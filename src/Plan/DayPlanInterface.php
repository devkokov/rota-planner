<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Day\DayInterface;

interface DayPlanInterface
{
    public function __construct(DayInterface $day);

    public function addShiftPlan(ShiftPlanInterface $shiftPlan);

    /**
     * @return ShiftPlanInterface[]
     */
    public function getShiftPlans(): array;
}
