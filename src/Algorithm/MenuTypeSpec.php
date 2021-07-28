<?php

namespace Uyu\Algorithm;

use Uyu\Menu;
use Uyu\MenuSpec;

class MenuTypeSpec implements MenuSpec
{
    public function satisfiedBy(Menu $menu): bool
    {
        return true;
    }
}
