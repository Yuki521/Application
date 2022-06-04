<?php

namespace Yuki\lesson3;

interface MenuSpec
{
    public function satisfiedBy(Menu $menu): bool;
}