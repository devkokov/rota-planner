<?php

namespace DevKokov\RotaPlanner\Plan;

use DevKokov\RotaPlanner\Day\DayInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

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

    private $allocatedHoursPerDay = [];
    private $allocatedHoursPerWeek = [];

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

    public function getAllocatedHoursPerWeek(WorkerInterface $worker)
    {
        return $this->allocatedHoursPerWeek[spl_object_hash($worker)] ?? 0;
    }

    public function getAllocatedHoursPerDay(WorkerInterface $worker, DayInterface $day)
    {
        return $this->allocatedHoursPerDay[get_class($day)][spl_object_hash($worker)] ?? 0;
    }

    public function allocateHours(WorkerInterface $worker, DayInterface $day, float $hours)
    {
        $this->allocatedHoursPerDay[get_class($day)][spl_object_hash($worker)] += $hours;
        $this->allocatedHoursPerWeek[spl_object_hash($worker)] += $hours;
    }
}
