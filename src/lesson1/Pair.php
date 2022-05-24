<?php

namespace Yuki\lesson1;

class Pair
{
    public int $first;

    public int $second;

    /**
     * @param int $first
     * @param int $second
     */
    public function __construct(int $first, int $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    /**
     * @return int
     */
    public function first(): int
    {
        return $this->first;
    }

    /**
     * @return int
     */
    public function second(): int
    {
        return $this->second;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "({$this->first()},{$this->second()})";
    }
}