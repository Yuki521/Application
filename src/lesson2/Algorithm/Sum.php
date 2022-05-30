<?php

namespace Yuki\lesson2\Algorithm;

use Yuki\lesson2\Calculation;

class Sum implements Calculation
{
    public function calc(int $x, int $y) :int
    {
        return $x + $y;
    }
}