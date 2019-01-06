<?php

namespace DevKokov\RotaPlanner\Worker;

interface WorkerInterface
{
    public function setName(string $name);
    public function getName(): string;
}
