<?php

namespace DevKokov\RotaPlanner\Worker;

class Worker implements WorkerInterface
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
