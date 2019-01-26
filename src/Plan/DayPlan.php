<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Day\DayInterface;

/**
 * Class DayPlan
 * @package DevKokov\RotaPlanner\Plan
 *
 * Representation of a planned day
 */
class DayPlan implements DayPlanInterface
{
    private $day;
    private $shiftPlans = [];

    public function __construct(DayInterface $day)
    {
        $this->day = $day;
    }

    public function getDay(): DayInterface
    {
        return $this->day;
    }

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
