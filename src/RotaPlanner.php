<?php

namespace DevKokov\RotaPlanner;

use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\Resolver\ResolverInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

class RotaPlanner implements RotaPlannerInterface
{
    private $week;
    private $workers;
    private $weekPlan;

    /**
     * RotaPlanner constructor.
     * @param WeekInterface $week
     * @param WorkerInterface[] $workers
     * @param ResolverInterface|null $resolver
     */
    public function __construct(WeekInterface $week, array $workers, ResolverInterface &$resolver = null)
    {
        $this->week = $week;
        $this->workers = $workers;

        if ($resolver) {
            $resolver->resolve($this);
        }
    }


    public function getWeek(): WeekInterface
    {
        return $this->week;
    }

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array
    {
        return $this->workers;
    }

    public function getWeekPlan(): WeekPlanInterface
    {
        return $this->weekPlan;
    }

    public function setWeekPlan(WeekPlanInterface $weekPlan)
    {
        $this->weekPlan = $weekPlan;
    }

    public function outputPlan()
    {
        if (!$this->weekPlan instanceof WeekPlanInterface) {
            echo "\nNothing to output.\n";
            return;
        }

        echo "\nWeek Plan\n\n";

        foreach ($this->weekPlan->getDayPlans() as $dayPlan) {
            echo strtoupper((new \ReflectionClass($dayPlan->getDay()))->getShortName()) . "\n";

            foreach ($dayPlan->getShiftPlans() as $shiftPlan) {
                echo $shiftPlan->getShift()->getName() . "\n";

                foreach ($shiftPlan->getWorkerPlans() as $workerPlan) {
                    echo $workerPlan->getWorker()->getName() . " - " . $workerPlan->getHours() . "\n";
                }

                echo "\n";
            }
        }
    }
}
