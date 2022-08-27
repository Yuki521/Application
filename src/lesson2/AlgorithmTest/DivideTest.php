<?php

namespace Yuki\lesson2\AlgorithmTest;

use DivisionByZeroError;
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
            '0が割られる場合' => [0, 5, 0],
        ];
    }

    public function testDivisionByZeroThrowsException(){
        $calc = new CalculateFactory();
        $calculate = $calc->create('/');

        //直前で呼び出す
        $this->expectException(DivisionByZeroError::class);
        $calculate->calc(1, 0);
    }
}
