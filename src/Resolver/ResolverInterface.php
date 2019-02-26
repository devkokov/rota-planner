<?php

namespace DevKokov\RotaPlanner\Resolver;

use DevKokov\RotaPlanner\RotaPlannerInterface;

interface ResolverInterface
{
    public function resolve(RotaPlannerInterface &$rotaPlanner);
}
