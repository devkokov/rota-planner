<?php

namespace DevKokov\RotaPlanner\Condition;

use DevKokov\RotaPlanner\RotaPlannerInterface;

interface ConditionInterface
{
    const VALIDATION_LEVEL_SHIFT = 'Shift';
    const VALIDATION_LEVEL_DAY = 'Day';
    const VALIDATION_LEVEL_WEEK = 'Week';

    public function getValidationLevel(): string;

    public function validate(RotaPlannerInterface $rotaPlanner);
}
