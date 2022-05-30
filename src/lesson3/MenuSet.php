<?php

namespace Yuki\lesson3;

class MenuSet
{
    private array $menus;

    /**
     * @param array $menus
     */
    public function __construct(array $menus)
    {
        $this->menus = $menus;
    }

    /**
     * @return array
     */
    public function getMenus(): array
    {
        return $this->menus;
    }

    /**
     *指定したメニュータイプのメニュー配列のみを返す
     *
     * @param string $type
     * @return array
     */
    public function getMenusByType(string $type): array
    {
        return array_filter($this->getMenus(),
            fn($menu) => $menu->getType() == $type
        );
    }

    public function getMenusByCalorie(int $cal): array
    {
        return array_filter($this->getMenus(),
            fn($menu) => $menu->getCal() >= $cal
        );
    }


}