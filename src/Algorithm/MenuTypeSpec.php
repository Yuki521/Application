<?php

namespace Uyu\Algorithm;

use Uyu\Menu;
use Uyu\MenuSpec;

class MenuTypeSpec implements MenuSpec
{
    private string $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getType() == $this->type;
    }
}
