<?php

namespace Yuki;

use PHPUnit\Framework\TestCase;
use Yuki\lesson2\Calculate;

class CalculateTest extends TestCase
{
    /**
     * @test
     * @dataProvider CalcProvider
     */
    public function 指定された演算子と一致する演算結果を返す($formula, $expected)
    {
        $n = explode(' ', $formula);
        $calculate = new Calculate($n[0]);
        $actual = $calculate->calc($n[1], $n[2]);

        $this->assertEquals($expected, $actual);
    }

    public function CalcProvider()
    {
        return [
            '+' => ['+ 1 3', 4],
            '-' => ['- 1 3', -2],
            'm' => ['m 1 3', 3],
            '/' => ['/ 100 2', 50],
            '%' => ['% 10 3', 1],
        ];

    }
}
