<?php

namespace DevKokov\RotaPlanner;

use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\Shift\ShiftInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

interface RotaPlannerInterface
{
    /**
     * @return WeekInterface[]
     */
    public function getWeeks(): array;

    /**
     * @return ShiftInterface[]
     */
    public function getShifts(): array;

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array;

    /**
     * @return WeekPlanInterface[]
     */
    public function getWeekPlans(): array;
}
