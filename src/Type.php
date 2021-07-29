<?php

namespace Uyu;

use Uyu\Menu;
use Uyu\MenuSpec;

class Type implements MenuSpec
{
    public function satisfiedBy(Menu $menu): bool
    {
        return true;
    }
}
