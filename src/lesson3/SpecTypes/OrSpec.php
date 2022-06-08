<?php

namespace Yuki\lesson3\SpecTypes;

use Yuki\lesson3\MenuSpec;
use Yuki\lesson3\Menu;

class OrSpec implements MenuSpec
{
    /**
     * @var MenuSpec
     */
    private MenuSpec $menuSpec1;

    /**
     * @var MenuSpec
     */
    private MenuSpec $menuSpec2;

    /**
     * @param MenuSpec $menuSpec1
     * @param MenuSpec $menuSpec2
     */
    public function __construct(MenuSpec $menuSpec1, MenuSpec $menuSpec2)
    {
        $this->menuSpec1 = $menuSpec1;
        $this->menuSpec2 = $menuSpec2;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $this->menuSpec1->satisfiedBy($menu) || $this->menuSpec2->satisfiedBy($menu);
    }
}