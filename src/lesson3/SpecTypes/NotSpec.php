<?php

namespace Yuki\lesson3\SpecTypes;

use Yuki\lesson3\MenuSpec;
use Yuki\lesson3\Menu;

class NotSpec implements MenuSpec
{
    /**
     * @var MenuSpec
     */
    private MenuSpec $menuSpec;


    /**
     * @param MenuSpec $menuSpec
     */
    public function __construct(MenuSpec $menuSpec)
    {
        $this->menuSpec = $menuSpec;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return !$this->menuSpec->satisfiedBy($menu);
    }
}