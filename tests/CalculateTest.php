<?php

namespace Yuki;

use PHPUnit\Framework\TestCase;
use Yuki\lesson2\Calculate;

class CalculateTest extends TestCase
{


    /**
     * @dataProvider CalcProvider
     */
    public function testCalc($stdin, $expected)
    {
        $formula = explode(' ', $stdin);
        $calculate = new Calculate($formula[0]);
        $actual = $calculate->calc($formula[1], $formula[2]);

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
