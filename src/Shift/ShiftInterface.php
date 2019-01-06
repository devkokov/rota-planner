<?php

namespace DevKokov\RotaPlanner\Shift;

interface ShiftInterface
{
    public function setName(string $name);
    public function getName(): string;
    public function setDuration(float $hours);
    public function getDuration(): float;
}
