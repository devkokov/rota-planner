<?php

namespace DevKokov\RotaPlanner\Worker;

use DevKokov\RotaPlanner\Day\DayInterface;

class Worker implements WorkerInterface
{
    private $name = '';
    private $canWorkOnDefault = true;
    private $canWorkOn = [];
    private $minHoursPerDay = 0.0;
    private $maxHoursPerDay = 0.0;
    private $minHoursPerWeek = 0.0;
    private $maxHoursPerWeek = 0.0;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCanWorkOnDefault(): bool
    {
        return $this->canWorkOnDefault;
    }

    public function setCanWorkOnDefault(bool $canWorkOnDefault)
    {
        $this->canWorkOnDefault = $canWorkOnDefault;
    }

    public function getCanWorkOn(DayInterface $day): bool
    {
        return $this->canWorkOn[get_class($day)] ?? $this->canWorkOnDefault;
    }

    public function setCanWorkOn(DayInterface $day, bool $canWork)
    {
        $this->canWorkOn[get_class($day)] = $canWork;
    }

    public function getMinHoursPerDay(): float
    {
        return $this->minHoursPerDay;
    }

    public function setMinHoursPerDay(float $minHoursPerDay)
    {
        $this->minHoursPerDay = $minHoursPerDay;
    }

    public function getMaxHoursPerDay(): float
    {
        return $this->maxHoursPerDay;
    }

    public function setMaxHoursPerDay(float $maxHoursPerDay)
    {
        $this->maxHoursPerDay = $maxHoursPerDay;
    }

    public function getMinHoursPerWeek(): float
    {
        return $this->minHoursPerWeek;
    }

    public function setMinHoursPerWeek(float $minHoursPerWeek)
    {
        $this->minHoursPerWeek = $minHoursPerWeek;
    }

    public function getMaxHoursPerWeek(): float
    {
        return $this->maxHoursPerWeek;
    }

    public function setMaxHoursPerWeek(float $maxHoursPerWeek)
    {
        $this->maxHoursPerWeek = $maxHoursPerWeek;
    }
}
