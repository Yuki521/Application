<?php
require __DIR__ . '/vendor/autoload.php';

use Yuki\Pair;
use Yuki\ArrayUtil;

echo '####### Q1 #######', PHP_EOL;
$pair1 = new Yuki\Pair(1, 2);
$pair2 = new Yuki\Pair(3,4);

echo $pair1->first(),PHP_EOL;
echo $pair1->second(),PHP_EOL;
echo $pair2->first(),PHP_EOL;
echo $pair2->second(),PHP_EOL;


echo '####### Q2 #######', PHP_EOL;
$pair = new Pair(1,2);

echo $pair->__toString(), PHP_EOL;
echo $pair, PHP_EOL;
//__toStringというマジックメソッドを使用しており、stringの場合のデフォルトを設定しているから同じ表記が出力される。


echo '####### Q3 #######', PHP_EOL;
$intArray = [1,2,3,4,5,6];
//$evensForeach = ArrayUtil::evensOfByForeach($intArray);
//$evensOld = ArrayUtil::evensOfOld($intArray);
$evens = ArrayUtil::evensOf($intArray);

//echo implode(',', $evensForeach), PHP_EOL;
//echo implode(',', $evensOld), PHP_EOL;
echo implode(',', $evens), PHP_EOL;


echo '####### Q4 #######', PHP_EOL;
$hogeArray = ArrayUtil::replicate(3,'hoge');
echo implode(',', $hogeArray).PHP_EOL;

$phpArray = ArrayUtil::replicate(2,'php');
echo implode(',', $phpArray).PHP_EOL;


echo '####### Q5 #######', PHP_EOL;
$zip1 = ArrayUtil::zip([1, 2, 3], [2, 3, 4]);
$zip2 = ArrayUtil::zip([1, 2, 3], [10, 9]);

echo implode(',', $zip1).PHP_EOL;
echo implode(',', $zip2).PHP_EOL;