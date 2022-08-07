<?php

namespace Yuki\lesson2\Algorithm;

use Yuki\lesson2\Calculation;

class Modulo implements Calculation
{
    public function calc(int $x, int $y): int
    {
        if ($x === 0 | $y === 0) {
            return 0;
        }
        return $x % $y;
    }
}