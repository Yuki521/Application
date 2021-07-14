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
  public function getMenuByType()
  {
    // $menus = $this->getMenus();
    // //きっとMenuのgetType()を使う。
    // $t = $this->getType("和食");
    // return $t;
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
