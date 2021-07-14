<?php

namespace Uyu;

use Uyu\Recipe;
use Uyu\Menu;

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
  public function getMenuByType($type)
  {
    $array_menu = [];
    foreach ($this->getMenus() as $menukey => $menu) {
      $array_menu[] = $this->getMenus()[$menukey]->getType();
    }
    $getkeys = array_keys($array_menu, $type);
    $getmenubytype = [];
    foreach ($getkeys as $getkey) {
      $getmenubytype[] = $this->getMenus()[$getkey];
    }
    return $getmenubytype;
  }

  /**
   * create cal.
   *
   * @return array
   */
  public function getMenuByCalorie()
  {
    // $menus = $this->getMenus();
    // //きっとMenuのgetCal()を使う。
    // $t = $this->getType("和食");
    // return $t;
  }
}
