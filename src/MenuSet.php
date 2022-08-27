<?php

namespace Uyu;

use Uyu\Algorithm\CalorieOverSpec;
use Uyu\Menu;
use Uyu\MenuSpec;
use Uyu\Algorithm\MenuTypeSpec;

class MenuSet extends Menu
{
    /**
     * @var array レシピ
     */
    private  array $menus;

    /**
     * Recip constructor.
     *
     * @param string $name
     * @param float $type
     */
    public function __construct(array $menus)
    {
        $this->menus = $menus;
    }

    /**
     * create cal.
     *
     * @return array
     */
    public function getMenus(): array
    {
        return $this->menus;
    }

    /**
     * create cal.
     *
     * @return array
     */
    public function getMenusByType($type)
    {
        /******** 自分 **********/
        // $array_menu = [];
        // foreach ($this->getMenus() as $menukey => $menu) {
        //   $array_menu[] = $this->getMenus()[$menukey]->getType();
        // }
        // $getkeys = array_keys($array_menu, $type);
        // $getMenusByType = [];
        // foreach ($getkeys as $getkey) {
        //   $getMenusByType[] = $this->getMenus()[$getkey];
        // }
        // return $getMenusByType;

        /******** 通常 **********/
        // $menus = [];
        // foreach ($this->getMenus() as $menu) {
        //   if ($menu->gettype() == $type) {
        //     $menus[] = $menu;
        //   }
        // }
        // return $menus;

        /******** 高階関数 **********/
        return  array_filter(
            $this->menus,
            function (Menu $menu) use ($type) {
                return $menu->getType() == $type;
            }
        );
    }

    /**
     * create cal.
     *
     * @return array
     */
    public function getMenusByCalorie(int $cal)
    {
        /******** 一般 **********/
        // $menus = [];
        // foreach ($this->getMenus() as $menu) {
        //     if ($menu->getCal() >= $cal) {
        //         $menus[] = $menu;
        //     }
        // }
        // return $menus;

        /******** 高階関数 **********/
        return array_filter(
            $this->getMenus(),
            function (Menu $menu) use ($cal) {
                return $menu->getCal() >= $cal;
            }
        );
    }

    /**
     * メニュー（$menu）が条件を満たす場合にtrueを返す。
     */
    // function spec(Menu $menu): bool

    /**
     * trueであればメニューを返します。
     *
     * @param callable $spec
     * @return array
     */
    public function getMenusBySpec(callable $spec): array
    {
        $filtered = [];
        foreach ($this->getMenus() as $menu) {
            if ($spec($menu)) {
                $filtered[] = $menu;
            }
        }
        return $filtered;
    }

    /**
     * menuspecを満たすmenu一覧を返すメソッド
     *
     * @param MenuSpec $menuspec
     * @return void
     */
    public function getMenusBySpecInterface(MenuSpec $menuspec)
    {
        $filtered = [];
        foreach ($this->getMenus() as $menu) {
            if ($menuspec->satisfiedBy($menu)) {
                $filtered[] = $menu;
            }
        }
        return $filtered;
    }
}
