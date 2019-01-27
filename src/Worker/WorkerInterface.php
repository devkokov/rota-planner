<?php

namespace DevKokov\RotaPlanner\Worker;

use DevKokov\RotaPlanner\Day\DayInterface;

interface WorkerInterface
{
    public function setName(string $name);
    public function getName(): string;
    public function setCanWorkOnDefault(bool $canWork);
    public function getCanWorkOnDefault(): bool;
    public function setCanWorkOn(DayInterface $day, bool $canWork);
    public function getCanWorkOn(DayInterface $day): bool;
    public function setMinHoursPerDay(float $hours);
    public function getMinHoursPerDay(): float;
    public function setMaxHoursPerDay(float $hours);
    public function getMaxHoursPerDay(): float;
    public function setMinHoursPerWeek(float $hours);
    public function getMinHoursPerWeek(): float;
    public function setMaxHoursPerWeek(float $hours);
    public function getMaxHoursPerWeek(): float;
}
