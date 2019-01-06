<?php

namespace DevKokov\RotaPlanner\Plan;

/**
 * Class WeekPlan
 * @package DevKokov\RotaPlanner\Plan
 *
 * Representation of a planned week
 */
class WeekPlan implements WeekPlanInterface
{
    private $dayPlans = [];

    public function addDayPlan(DayPlanInterface $dayPlan)
    {
        $this->dayPlans[] = $dayPlan;
    }

    /**
     * @return DayPlanInterface[]
     */
    public function getDayPlans(): array
    {
        return $this->dayPlans;
    }
}
