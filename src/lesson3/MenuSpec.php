<?php

namespace Yuki\lesson3;

/**
 *メニューの仕様
 */
interface MenuSpec
{
    /**
     *メニューがある条件を満たせばtrueを返す。
     *
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool;
}