<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Week\WeekInterface;

interface WeekPlanInterface
{
    public function __construct(WeekInterface $week);

    public function addDayPlan(DayPlanInterface $dayPlan);

    /**
     * @return DayPlanInterface[]
     */
    public function getDayPlans(): array;
}
