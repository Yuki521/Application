<?php

namespace Yuki\lesson3\SpecLists;

use Yuki\lesson3\Menu;
use Yuki\lesson3\MenuSpec;

class MenuTypeSpec implements MenuSpec
{
    /**
     * @var string
     */
    private string $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getType() === $this->type;
    }
}