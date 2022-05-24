<?php

namespace Yuki\Lesson1\Lesson1\lesson2;

class Calculate implements Calculation
{
    /**
     * @var string
     */
    private string $sign;

    /**
     * @param string $sign
     */
    public function __construct(string $sign)
    {
        $this->sign = $sign;
    }

    /**
     * @return string
     */
    public function sign(): string
    {
        return $this->sign;
    }

    /**
     * @param int $x
     * @param int $y
     * @return int
     */
    public function calc(int $x, int $y): int
    {
        return match ($this->sign()) {
            '+' => $x + $y,
            '-' => $x - $y,
            'm' => $x * $y,
            '/' => $x / $y,
            '%' => $x % $y
        };
    }

}