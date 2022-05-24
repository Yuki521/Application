<?php

namespace Yuki\Lesson1\Lesson1\lesson2;

interface Calculation
{
    public function calc(int $x, int $y): int;
}