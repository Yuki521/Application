<?php

namespace Yuki\lesson3;

class Recipe
{
    private string $name;

    private float $calorie;

    /**
     * @param string $name
     * @param float $cal
     */
    public function __construct(string $name, float $cal)
    {
        $this->name = $name;
        $this->calorie = $cal;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getCalorie(): float
    {
        return $this->calorie;
    }

}