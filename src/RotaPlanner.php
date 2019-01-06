<?php

namespace DevKokov\RotaPlanner;

use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

class RotaPlanner implements RotaPlannerInterface
{
    private $weeks;
    private $shifts;
    private $workers;
    private $weekPlans;

    /**
     * @return WeekInterface[]
     */
    public function getWeeks(): array
    {
        return $this->weeks;
    }

    /**
     * @param WeekInterface[] $weeks
     */
    public function setWeeks($weeks)
    {
        $this->weeks = $weeks;
    }

    /**
     * @return ShiftInterface[]
     */
    public function getShifts(): array
    {
        return $this->shifts;
    }

    /**
     * @param ShiftInterface[] $shifts
     */
    public function setShifts($shifts)
    {
        $this->shifts = $shifts;
    }

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array
    {
        return $this->workers;
    }

    /**
     * @param WorkerInterface[] $workers
     */
    public function setWorkers($workers)
    {
        $this->workers = $workers;
    }

    /**
     * @return WeekPlanInterface[]
     */
    public function getWeekPlans(): array
    {
        return $this->weekPlans;
    }

    public function addWeekPlan(WeekPlanInterface $weekPlan)
    {
        $this->weekPlans[] = $weekPlan;
    }
}
