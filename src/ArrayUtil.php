<?php

namespace Yuki;

class ArrayUtil
{
//    /**
//     * @param $num
//     * @return bool
//     */
//    public static function isEven($num) :bool
//    {
//        return $num % 2 === 0;
//    }
//
//    /**
//     * @param array $intList
//     * @return array
//     */
//    public static function evensOfByForeach(array $intList) :array
//    {
//        $intArray = [];
//        foreach ($intList as $int) {
//            if(self::isEven($int)){
//                $intArray[] = $int;
//            }
//        }
//        return $intArray;
//    }
//
//    /**
//     * @param array $intList
//     * @return array
//     */
//    public static function evensOfOld(array $intList) :array
//    {
//        return array_filter($intList, function ($int) {
//            return $int % 2 === 0;
//        });
//    }

    /**
     * @param array $intList
     * @return array
     */
    public static function evensOf(array $intList) :array
    {
        return array_filter($intList, fn($int) => $int % 2 === 0);
    }

    public static function replicate(int $int, string $string)
    {
        return array_fill(0, $int, $string);
    }

    public static function zip(array $array1, $array2) :array
    {
        $num = min(count($array1), count($array2));
        $array = [];
        for ($i = 0; $i< $num; $i++) {
            $array[] = new Pair($array1[$i], $array2[$i]);
        }
        return $array;
    }
}