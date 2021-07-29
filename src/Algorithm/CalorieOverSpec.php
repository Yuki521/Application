<?php

namespace Uyu\Algorithm;

use Uyu\Menu;
use Uyu\MenuSpec;

class CalorieOverSpec implements MenuSpec
{
  public function satisfiedBy(Menu $menu): bool
  {
    return false;
  }
}
