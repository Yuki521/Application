<?php

namespace Yuki;

class ArrayUntil
{
    private array $intArray;

    /**
     * @return array
     */
    public function getIntArray(): array
    {
        return $this->intArray;
    }

    /**
     * @param array $intArray
     */
    public function setIntArray(array $intArray): void
    {
        $this->intArray = $intArray;
    }

    /**
     * @param $num
     * @return bool
     */
    public static function isEven($num)
    {
        return $num % 2 == 0;
    }

    /**
     * @param array $intList
     * @return array
     */
    public static function evensOfByForeach(array $intList)
    {
        $intArray = [];
        foreach ($intList as $int) {
            if(self::isEven($int)){
                $intArray[] = $int;
            }
        }
        return $intArray;
    }

    public static function zip(array $array1, $array2)
    {
        $array = [];
        $array[] = $array1;
        $array[] = $array2;
        $zip =[];
        foreach ($array as  $item){
            foreach ($item as $key => $num){
                $zip[$key][] = $num;
            }
        }
        return $zip;
    }
}