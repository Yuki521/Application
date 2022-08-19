<?php

namespace Yuki\lesson2;

use JetBrains\PhpStorm\Pure;
use Yuki\lesson2\Algorithm\Modulo;
use Yuki\lesson2\Algorithm\Multiply;
use Yuki\lesson2\Algorithm\Minus;
use Yuki\lesson2\Algorithm\Sum;
use Yuki\lesson2\Algorithm\Divide;

class CalculateFactory
{
    /**
     * @param string $operator
     * @return Calculation
     */
    #[Pure] public function create(string $operator): Calculation
    {
        return match ($operator) {
            '+' => new Sum(),
            '-' => new Minus(),
            'm' => new Multiply(),
            '/' => new Divide(),
            '%' => new Modulo(),
        };
    }

}