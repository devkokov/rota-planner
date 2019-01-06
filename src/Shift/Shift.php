<?php

namespace DevKokov\RotaPlanner\Shift;

class Shift implements ShiftInterface
{
    private $name = '';

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
