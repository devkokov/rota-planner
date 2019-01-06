<?php

namespace DevKokov\RotaPlanner\Shift;

interface ShiftInterface
{
    public function setName(string $name);
    public function getName(): string;
}
