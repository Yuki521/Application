<?php

namespace Yuki\lesson3;

use Closure;

class MenuSet
{
    /**
     * @var array
     */
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
            fn(Menu $menu) => $menu->getType() == $type
        );
    }

    /**
     * 指定したカロリー以上のメニュー配列のみを返す
     *
     * @param int $cal
     * @return array
     */
    public function getMenusByCalorie(int $cal): array
    {
        return array_filter($this->getMenus(),
            fn(Menu $menu) => $menu->getCal() >= $cal
        );
    }

    /**
     * 任意の条件を満たすメニュー配列を返す
     *
     * @param Closure $spec
     * @return array
     */
    public function getMenusBySpec(Closure $spec): array
    {
        $filtered=[];
        foreach ($this->getMenus() as $menu) {
            if($spec($menu)){
                $filtered[] = $menu;
            }
        }
        return $filtered;
    }
}