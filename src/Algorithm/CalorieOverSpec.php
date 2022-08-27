<?php

namespace Uyu\Algorithm;

use Uyu\Menu;
use Uyu\MenuSpec;

class CalorieOverSpec implements MenuSpec
{

    private int $cal;

    /**
     * constructer
     *
     * @param integer $cal
     */
    public function __construct(int $cal)
    {
        $this->cal = $cal;
    }

    /**
     * メニューの合計カロリーが$calよりも多ければtrueを返します。
     *
     * @param Menu $menu
     * @return boolean
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getCal() >= $this->cal;
    }
}
