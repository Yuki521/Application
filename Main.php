<?php
require __DIR__ . '/vendor/autoload.php';

use Yuki\Pair;
use Yuki\ArrayUtil;

//Q1
//$pair1 = new Yuki\Pair(1, 2);
//$pair2 = new Yuki\Pair(3,4);
//
//echo $pair1->getFirst(),PHP_EOL;
//echo $pair1->getSecond(),PHP_EOL;
//
//echo $pair2->getFirst(),PHP_EOL;
//echo $pair2->getSecond(),PHP_EOL;

//Q2
//$pair = new Pair(1,2);
//
//var_dump( $pair->__toString());
//var_dump( $pair);

//Q3
//$intArray = [1,2,3,4,5,6];
//$evens = ArrayUntil::evensOfByForeach($intArray);
//
//echo implode(',', $evens), PHP_EOL;

//Q4
$zip1 = ArrayUtil::zip([1,2,3],[2,3,4]);

var_dump($zip1);