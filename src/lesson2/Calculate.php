<?php

namespace Yuki\lesson2;

class Calculate implements Calculation
{
    /**
     * @var string
     */
    private string $operator;

    /**
     * @param string $operator
     */
    public function __construct(string $operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function operator(): string
    {
        return $this->operator;
    }

    /**
     * 指定された演算子と一致する演算結果を返します
     *
     * @param int $x
     * @param int $y
     * @return int
     */
    public function calc(int $x, int $y): int
    {
        return match ($this->operator()) {
            '+' => $x + $y,
            '-' => $x - $y,
            'm' => $x * $y,
            '/' => $x / $y,
            '%' => $x % $y
        };
    }

}