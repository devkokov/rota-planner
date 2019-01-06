<?php

namespace DevKokov\RotaPlanner\Shift;

interface ShiftInterface
{
    public function setName(string $name);
    public function getName(): string;
    public function setDuration(float $hours);
    public function getDuration(): float;
    public function setNumOfWorkers(int $workers);
    public function getNumOfWorkers(): int;
}
