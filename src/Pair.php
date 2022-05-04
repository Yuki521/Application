<?php

namespace Yuki;

class Pair
{
    private int $first;

    private int $second;

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
    public function getFirst(): int
    {
        return $this->first;
    }

    /**
     * @return int
     */
    public function getSecond(): int
    {
        return $this->second;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return '('.$this->first.','.$this->second.')';
    }
}