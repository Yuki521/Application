<?php

namespace Yuki\lesson1;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function 配列から偶数のみを抽出する()
    {
        $actual = ArrayUtil::evensOf([1, 2, 3, 4, 5, 6]);

        $this->assertEqualsCanonicalizing([2, 4, 6], $actual);
    }


    /**
     * @test
     * @dataProvider replicateProvider
     */
    public function 指定した大きさと文字列のみからなる配列を生成する($input, $expected)
    {
        $actual = ArrayUtil::replicate($input['number'], $input['characters']);

        $this->assertEquals($expected, $actual);
    }

    public function replicateProvider()
    {
        return [
            [['number' => 3, 'characters' => 'hoge'], ['hoge', 'hoge', 'hoge']],
            [['number' => 2, 'characters' => 'php'], ['php', 'php']]
        ];
    }


    /**
     * @test
     * @dataProvider zipProvider
     */
    public function 二つの整数の配列を受け取り、各配列の対応する要素をペアPairとする配列を返す($input, $expected)
    {
        $actual = ArrayUtil::zip($input['first'], $input['second']);

        $this->assertEquals($expected, $actual);
    }

    public function zipProvider()
    {
        return [
            [['first' => [1, 2, 3], 'second' => [2, 3, 4]], ['(1,2)', '(2,3)', '(3,4)']],
            [['first' => [1, 2, 3], 'second' => [10, 9]], ['(1,10)', '(2,9)']]
        ];
    }
}
