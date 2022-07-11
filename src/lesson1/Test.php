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


    /**
     * @test
     * @dataProvider factorsProvider
     */
    public function 与えられた数の約数を求めてリストとして返す($input, $expected)
    {
        $actual = ArrayUtil::factors($input);

        $this->assertEqualsCanonicalizing($expected, $actual);
    }

    public function factorsProvider()
    {
        return [
            [15, [1, 3, 5, 15]],
            [7, [1, 7]]
        ];
    }


    /**
     * @test
     */
    public function 与えられた数の完全数の一覧を配列として返す()
    {
        $actual = ArrayUtil::perfects(500);

        $this->assertEqualsCanonicalizing([6, 28, 496], $actual);
    }


    /**
     * @test
     */
    public function 整数の配列を受け取り、隣あう要素をペアPairとした配列を返す()
    {
        $actual = ArrayUtil::pairs([1, 2, 3, 4]);

        $this->assertEquals($actual, [new Pair(1, 2), new Pair(2, 3), new Pair(3, 4)]);
    }


    /**
     * @test
     * @dataProvider sortedProvider
     */
    public function 与えられた整数配列が、昇順にソートされていればtrueを返し、そうでなければfalseを返す($input, $expected)
    {
        $actual = ArrayUtil::sorted($input);

        $this->assertEquals($expected, $actual);
    }

    public function sortedProvider()
    {
        return [
            [[1, 2, 3, 4], true],
            [[3, 2, 5, 6], false]
        ];
    }


    /**
     * @test
     * @dataProvider  positionsProvider
     */
    public function 整数の配列と整数値を受け取り、その値の配列内の位置（インデックス）を配列として返す($input, $expected)
    {
        $actual = ArrayUtil::positions($input['int'],$input['array']);

        $this->assertEquals($actual, $expected);
    }

    public function positionsProvider()
    {
        return [
            [['int' => 10, 'array' => [10, 15, 20, 10, 10, 33]],[0,3,4]],
            [['int' => 3, 'array' => [1, 2, 3, 4, 5]],[2]]
        ];
    }
}
