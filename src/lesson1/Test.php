<?php

namespace Yuki\lesson1;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     * @dataProvider evensOfProvider
     */
    public function 配列から偶数のみを抽出する($input, $expected)
    {
        $actual = ArrayUtil::evensOf($input);

        $this->assertEquals($expected, $actual);
    }

    public function evensOfProvider()
    {
        return [
            '偶数あり' => [[1, 2, 3, 4, 5, 6], [2, 4, 6]],
            '偶数なし' => [[1, 3, 5], []],
            '空配列' => [[], []]
        ];
    }


    /**
     * @test
     * @dataProvider replicateProvider
     */
    public function 指定した大きさと文字列のみからなる配列を生成する($num, $str, $expected)
    {
        $actual = ArrayUtil::replicate($num, $str);

        $this->assertEquals($expected, $actual);
    }

    public function replicateProvider()
    {
        return [
            '自然数' => [3, 'hoge', ['hoge', 'hoge', 'hoge']],
            '0' => [0, 'test', []],
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
            '同じ大きさ' => [['first' => [1, 2, 3], 'second' => [2, 3, 4]], ['(1,2)', '(2,3)', '(3,4)']],
            'firstが小さい' => [['first' => [1, 2], 'second' => [10, 9, 8]], ['(1,10)', '(2,9)']],
            'secondが小さい' => [['first' => [1, 2, 3], 'second' => [10, 9]], ['(1,10)', '(2,9)']],
            'firstが空' => [['first' => [], 'second' => [1, 2, 3]], []],
            'secondが空' => [['first' => [1, 2, 3], 'second' => []], []],
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
            '複数ある' => [15, [1, 3, 5, 15]],
            '1つ' => [1, [1]],
            '0' => [0, []],
        ];
    }


    /**
     * @test
     * @dataProvider perfectsProvider
     */
    public function 与えられた数の完全数の一覧を配列として返す($input, $expected)
    {
        $actual = ArrayUtil::perfects($input);

        $this->assertEqualsCanonicalizing($expected, $actual);
    }

    public function perfectsProvider()
    {
        return [
            'あり' => [500, [6, 28, 496]],
            'なし' => [5, []],
            '0' => [0, []]
        ];
    }


    /**
     * @test
     * @dataProvider pairsProvider
     */
    public function 整数の配列を受け取り、隣あう要素をペアPairとした配列を返す($input, $expected)
    {
        $actual = ArrayUtil::pairs($input);

        $this->assertEquals($actual, $expected);
    }

    public function pairsProvider()
    {
        return [
            '配列の要素が複数' => [[1, 2, 3, 4], [new Pair(1, 2), new Pair(2, 3), new Pair(3, 4)]],
            '配列の要素が１つ' => [[1], []],
            '空配列' => [[], []]
        ];
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
            '配列が昇順にソート済み' => [[1, 2, 3, 4], true],
            '配列に同じ値があり、かつ昇順にソート済み' => [[1, 2, 2, 3, 4], true],
            '配列がソートされていない' => [[3, 2, 5, 6], false],
            //降順にソート済み
            '配列の要素が1つ' => [[1], true],
            '空配列' => [[], true]
        ];
    }


    /**
     * @test
     * @dataProvider  positionsProvider
     */
    public function 整数の配列と整数値を受け取り、その値の配列内の位置（インデックス）を配列として返す($input, $expected)
    {
        $actual = ArrayUtil::positions($input['int'], $input['array']);

        $this->assertEquals($actual, $expected);
    }

    public function positionsProvider()
    {
        return [
            '複数' => [['int' => 10, 'array' => [10, 15, 20, 10, 33, 10]], [0, 3, 5]],
            '1つ' => [['int' => 3, 'array' => [1, 2, 3, 4, 5]], [2]],
            '存在しない' => [['int' => 1, 'array' => [2, 3, 4, 5, 6]], []],
            '空配列' => [['int' => 2, 'array' => []], []]
        ];
    }


    /**
     * @test
     */
    public function 代入テスト()
    {
        $y = ($x = 1);

        $this->assertEquals(1, $y);
    }
}
