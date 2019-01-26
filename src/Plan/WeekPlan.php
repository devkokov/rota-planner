<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Week\WeekInterface;

/**
 * Class WeekPlan
 * @package DevKokov\RotaPlanner\Plan
 *
 * Representation of a planned week
 */
class WeekPlan implements WeekPlanInterface
{
    private $week;
    private $dayPlans = [];

    public function __construct(WeekInterface $week)
    {
        $this->week = $week;
    }

    public function getWeek(): WeekInterface
    {
        return $this->week;
    }

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
