<?php

namespace Yuki\lesson3;

use Closure;

class MenuSet
{
    /**
     * @var Menu[]
     */
    private array $menus;

    /**
     * @param Menu[] $menus
     */
    public function __construct(array $menus)
    {
        $this->menus = $menus;
    }

    /**
     * @return Menu[]
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
//        return array_filter($this->getMenus(),
//            fn(Menu $menu) => $menu->getType() == $type
//        );

        return $this->getMenusBySpec(fn(Menu $menu) => $menu->getType() == $type);
    }

    /**
     * 指定したカロリー以上のメニュー配列のみを返す
     *
     * @param int $cal
     * @return array
     */
    public function getMenusByCalorie(int $cal): array
    {
//        return array_filter($this->getMenus(),
//            fn(Menu $menu) => $menu->getCalorie() >= $cal
//        );

        return $this->getMenusBySpec(fn(Menu $menu) => $menu->getCalorie() >= $cal);
    }

    /**
     * 任意の条件を満たすメニュー配列を返す
     *
     * @param Closure $spec
     * @return Menu[]
     */
    public function getMenusBySpec(Closure $spec): array
    {
//        $filtered = [];
//        foreach ($this->menus as $menu) {
//            if ($spec($menu)) {
//                $filtered[] = $menu;
//            }
//        }
//        return $filtered;

        return array_filter($this->menus,
            fn(Menu $menu) => $spec($menu)
        );
    }

    /**
     * @param MenuSpec $menuSpec
     * @return Menu[]
     */
    public function getMenusBySpecInterface(MenuSpec $menuSpec): array
    {
        return array_filter($this->menus,
            fn(Menu $menu) => $menuSpec->satisfiedBy($menu)
        );
    }
}