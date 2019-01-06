<?php

namespace DevKokov\RotaPlanner\Shift;

class Shift implements ShiftInterface
{
    private $name = '';
    private $duration = 0;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDuration(float $hours)
    {
        $this->duration = $hours;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }
}
