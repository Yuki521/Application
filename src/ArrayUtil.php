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
        return array_filter(range(1, $arg), fn($int) => $arg % $int ===0);
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
        return array_filter(range(1,$arg),fn($int) =>  array_sum(self::factors($int)) - $int === $int);
    }

    /**
     * @param array $arg
     * @return array
     */
    public static function pairs(array $arg): array
    {
        //1.数分繰り返す
        //2.1つめ2つめをPairに入れてarrayで返す
        $countArg = count($arg);
        $intArray = [];
        for($i = 0; $i < $countArg; $i++){
            if($i +1 < $countArg){
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
        //2.firstがsecondより大きければ return false
        $pairs = self::pairs($arg);
        foreach ($pairs as $pair) {
            if($pair->first > $pair->second){
                return false;
            }
        }
        return true;
    }
}