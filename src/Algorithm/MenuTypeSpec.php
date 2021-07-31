<?php

namespace Uyu\Algorithm;

use Uyu\Menu;
use Uyu\MenuSpec;

class MenuTypeSpec implements MenuSpec
{

    private string $type;

    /**
     * constructer
     *
     * @param [type] $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * menuのタイプが$typeと同じならtrueを返します。
     *
     * @param Menu $menu
     * @return boolean
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getType() == $this->type;
    }
}
