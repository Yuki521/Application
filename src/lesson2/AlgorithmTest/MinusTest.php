<?php

namespace Yuki\lesson2\AlgorithmTest;

use PHPUnit\Framework\TestCase;
use Yuki\lesson2\CalculateFactory;

class MinusTest extends TestCase
{
    /**
     * @test
     * @dataProvider MinusProvider
     */
    public function 差を算出できる($x, $y, $expected)
    {
        $factory = new CalculateFactory();
        $calculate = $factory->create('-');
        $actual = $calculate->calc($x, $y);

        $this->assertEquals($expected, $actual);
    }

    public function MinusProvider()
    {
        return [
            '整数の場合' => [3, 2, 1],
            'マイナスの場合' => [0, 2, -2],
        ];
    }
}
