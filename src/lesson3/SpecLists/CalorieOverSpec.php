<?php

namespace Yuki\lesson3\SpecLists;

use Yuki\lesson3\Menu;
use Yuki\lesson3\MenuSpec;

class CalorieOverSpec implements MenuSpec
{
    /**
     * @var float
     */
    private float $calorie;

    /**
     * @param $calorie
     */
    public function __construct($calorie)
    {
        $this->calorie = $calorie;
    }

    /**
     * @return float
     */
    public function getCalorie(): float
    {
        return $this->calorie;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getCalorie() >= $this->getCalorie();
    }
}