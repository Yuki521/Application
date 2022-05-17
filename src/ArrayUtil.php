<?php

namespace Yuki;

class ArrayUtil
{
    /**
     * @param array $intList
     * @return array
     */
    public static function evensOf(array $intList): array
    {
        return array_filter($intList, fn($int) => $int % 2 === 0);
    }

    /**
     * @param int $int
     * @param string $string
     * @return array
     */
    public static function replicate(int $int, string $string)
    {
        return array_fill(0, $int, $string);
    }

    /**
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function zip(array $array1, array $array2): array
    {
        $num = min(count($array1), count($array2));
        $array = [];
        for ($i = 0; $i < $num; $i++) {
            $array[] = new Pair($array1[$i], $array2[$i]);
        }
        return $array;
    }

    /**
     * @param int $arg
     * @return array
     */
    public static function factors(int $arg): array
    {
        return array_filter(range(1, $arg), fn($int) => $arg % $int === 0);
    }

    /**
     * @param int $arg
     * @return array
     */
    public static function perfects(int $arg): array
    {
        //1.約数の和を求める
        //2.約数の和から自分自身の数を引く
        //3.その数が等しければその数を返す
        return array_filter(range(1, $arg), fn($int) => array_sum(self::factors($int)) - $int === $int);
    }

    /**
     * @param array $arg
     * @return array
     */
    public static function pairs(array $arg): array
    {
        //数値に+1足した数が配列の数を越えるまで、配列の数分$iの数、$i+1の数をPairに入れてarrayで返す
        $intArray = [];
        for ($i = 0; $i < count($arg); $i++) {
            if ($i + 1 < count($arg)) {
                $intArray[] = new Pair($arg[$i], $arg[$i + 1]);
            }
        }
        return $intArray;
    }

    /**
     * @param array $arg
     * @return bool
     */
    public static function sorted(array $arg): bool
    {
        //1.pairsを使って配列を分解
        //2.firstがsecondより大きければ配列を返す
        //3.emptyであればtrueを返す
        return empty(array_filter(self::pairs($arg), fn($pair) => $pair->first > $pair->second));
    }

    /**
     * @param int $int
     * @param array $intArray
     * @return array
     */
    public static function positions(int $int, array $intArray): array
    {
        //1.整数値を配列の数分と同じ数の配列にする
        $replicate = self::replicate(count($intArray), $int);
        //2.zipメソッドを使用してpairの形にする
        $zip = self::zip($intArray, $replicate);
        //3.sortedの要領で比較して、一致した配列を返す
        $positions = array_filter($zip, fn($zip) => $zip->first === $zip->second);
        //4.keyを返す
        return array_keys($positions);
    }
}