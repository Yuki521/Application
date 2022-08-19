<?php

namespace Yuki\lesson2\AlgorithmTest;

use PHPUnit\Framework\TestCase;
use Yuki\lesson2\CalculateFactory;

class DivideTest extends TestCase
{

    /**
     * @test
     * @dataProvider divideProvider
     */
    public function 商を四捨五入して算出できる($x, $y, $expected)
    {
        $factory = new CalculateFactory();
        $calculate = $factory->create('/');
        $actual = $calculate->calc($x, $y);

        $this->assertEquals($expected, $actual);
    }

    public function divideProvider()
    {
        return [
            '整数の場合' => [6, 2, 3],
            '四捨五入し切り上げる場合' => [9, 2, 5],
            '四捨五入し切り下げる場合' => [4, 3, 1],
            //例外のテスト（別で切り出す必要がある）
            '0で割る場合' => [3, 0, 0],
            '0が割られる場合' => [0, 5, 0],
        ];
    }
}
