<?php

namespace DevKokov\RotaPlanner\Worker\Condition;

/**
 * Class DaysOfWeek
 * @package DevKokov\RotaPlanner\Worker\Condition
 *
 * Represents the days of week a worker can work
 */
class DaysOfWeek implements ConditionInterface
{
    public $monday = true;
    public $tuesday = true;
    public $wednesday = true;
    public $thursday = true;
    public $friday = true;
    public $saturday = true;
    public $sunday = true;
}
