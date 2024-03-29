<?php

namespace Uyu;


/**
 * メニューの仕様。
 */
interface MenuSpec
{
    /**
     * メニューがある条件を満たせばtrueを返す。
     * @param menu メニュー
     */
    public function satisfiedBy(Menu $menu): bool;
}
