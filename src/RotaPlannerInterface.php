<?php

namespace DevKokov\RotaPlanner;

use DevKokov\RotaPlanner\Plan\WeekPlanInterface;
use DevKokov\RotaPlanner\Resolver\ResolverInterface;
use DevKokov\RotaPlanner\Week\WeekInterface;
use DevKokov\RotaPlanner\Worker\WorkerInterface;

interface RotaPlannerInterface
{
    /**
     * RotaPlannerInterface constructor.
     * @param WeekInterface $week
     * @param WorkerInterface[] $workers
     * @param ResolverInterface|null $resolver
     */
    public function __construct(WeekInterface $week, array $workers, ResolverInterface $resolver = null);

    /**
     * @return WorkerInterface[]
     */
    public function getWorkers(): array;
    public function getWeek(): WeekInterface;
    public function setWeekPlan(WeekPlanInterface $weekPlan);
    public function getWeekPlan(): WeekPlanInterface;
}
