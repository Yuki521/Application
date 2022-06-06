<?php

namespace Yuki\lesson3\SpecTypes;

use Yuki\lesson3\MenuSpec;
use Yuki\lesson3\Menu;

class AndSpec implements MenuSpec
{
    /**
     * @var MenuSpec
     */
    private MenuSpec $specList1;

    /**
     * @var MenuSpec
     */
    private MenuSpec $specList2;

    /**
     * @param MenuSpec $specList1
     * @param MenuSpec $specList2
     */
    public function __construct(MenuSpec $specList1, MenuSpec $specList2)
    {
        $this->specList1 = $specList1;
        $this->specList2 = $specList2;
    }

    /**
     * @return MenuSpec
     */
    public function getSpecList1(): MenuSpec
    {
        return $this->specList1;
    }

    /**
     * @return MenuSpec
     */
    public function getSpecList2(): MenuSpec
    {
        return $this->specList2;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $this->getSpecList1()->satisfiedBy($menu) && $this->getSpecList2()->satisfiedBy($menu);
     }
}