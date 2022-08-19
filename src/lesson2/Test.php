<?php

namespace Yuki\lesson2;

use PHPUnit\Framework\TestCase;
use Yuki\lesson2\Algorithm\Divide;

class Test extends TestCase
{
    /**
     * @test
     * @dataProvider calcProvider
     */
    public function 演算子に応じて計算できる($operator, $x, $y, $expected)
    {
        $factory = new CalculateFactory();
        $calculate = $factory->create($operator);
        $answer = $calculate->calc($x, $y);

        $this->assertEquals($expected, $answer);
    }

    public function calcProvider()
    {
        return [
            '和' => ['+', 1, 2, 3],
            '差' => ['-', 2, 1, 1],
            'マイナスになる差' => ['-', 2, 5, -3],
            '積' => ['m', 4, 2, 8],
            '0を含む積' => ['m', 0, 2, 0],
            '商' => ['/', 6, 2, 3],
            '0を含む商' => ['/', 6, 0, 0],
            '余り' => ['%', 5, 2, 1],
            '0を含む余り' => ['%', 5, 0, 0],
        ];
    }
}