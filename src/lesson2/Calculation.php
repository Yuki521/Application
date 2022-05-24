<?php

namespace Yuki\lesson2;

interface Calculation
{
    public function calc(int $x, int $y): int;
}