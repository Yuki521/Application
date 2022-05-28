<?php

namespace Yuki\lesson2;

use Yuki\lesson2\Algorithm\Modulo;
use Yuki\lesson2\Algorithm\Multiply;
use Yuki\lesson2\Algorithm\Minus;
use Yuki\lesson2\Algorithm\Sum;
use Yuki\lesson2\Algorithm\Devide;

class CalculateFactory
{
    /**
     * @param string $operator
     * @return Calculation
     */
    public function create(string $operator): Calculation
    {
        return match ($operator) {
            '+' => new Sum(),
            '-' => new Minus(),
            'm' => new Multiply(),
            '/' => new Devide(),
            '%' => new Modulo(),
        };
    }

}