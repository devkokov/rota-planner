<?php

namespace DevKokov\RotaPlanner\Condition\Worker;

use DevKokov\RotaPlanner\Day\DayInterface;

/**
 * Class DaysOfWeek
 * @package DevKokov\RotaPlanner\Worker\Condition
 *
 * Represents the days of week a worker can work
 */
class DaysOfWeek implements WorkerConditionInterface
{
    public $canWorkByDefault = true;
    private $days = [];

    public function addDay(DayInterface $day, bool $canWork)
    {
        $this->days[get_class($day)] = $canWork;
    }

    public function removeDay(DayInterface $day)
    {
        unset($this->days[get_class($day)]);
    }

    /**
     * @return bool[]
     */
    public function getDays(): array
    {
        return $this->days;
    }

    public function getCanWorkOn(DayInterface $day): bool
    {
        return $this->days[get_class($day)] ?? $this->canWorkByDefault;
    }
}
