<?php

namespace menu_application;

class Recipe
{
    /**
     * @var string 料理名
     */
    private string $name;

    /**
     * @var float カロリー
     */
    private float $cal;

    /**
     * Recip constructor.
     *
     * @param string $name
     * @param float $cal
     */
    public function __construct(string $name, float $cal)
    {
        $this->name = $name;
        $this->cal = $cal;
    }

    /**
     * create name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * create cal.
     *
     * @return float
     */
    public function getCal(): float
    {
        return $this->cal;
    }
}
