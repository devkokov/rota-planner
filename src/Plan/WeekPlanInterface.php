<?php

namespace DevKokov\RotaPlanner\Plan;

interface WeekPlanInterface
{
    public function addDayPlan(DayPlanInterface $dayPlan);

    /**
     * @return DayPlanInterface[]
     */
    public function getDayPlans(): array;
}
