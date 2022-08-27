<?php

//3 -> 1*2*3
//4 -> 1*2*3*4

function fact(int $n)
{
    $answer = 1;
    for ($i = 1; $i <= $n; $i++) {
        $answer = $answer * $i;
    }
    return $answer;

}


function fact2(int $n)
{
    if ($n === 0) {
        return 1;
    }
    echo '$n1 = ' . $n, PHP_EOL;
    $x = fact2($n - 1);
    echo '$n2 = ' . $n, PHP_EOL;
    echo '$x = ' . $x, PHP_EOL;
    return $x * $n;
}

echo fact2($argv[1]), PHP_EOL;
//fact2(3)
//fact2(2) * 3
//[ fact2(1) * 2 ] * 3
// fact2(1) = []
//[ fact2(0) * 1 ] * 2 * 3
// fact2(0) = [1]
//[ 1 ] * 1 * 2 * 3

$n = [1, 2, 3, 4, 5];
$n2 = [2, 3, 4, 5];
$n3 = [3, 4, 5];

//基底 = [];

function total($array)
{
    if($array == []){
        return 0;
    }

    $first = array_shift($array);
    $x = total($array);

    return $first + $x;
}
//[1, 2, 3, 4, 5]
//[2,3,4,5] 1
//[3,4,5] 1 + 2
//[4,5] 1 + 2 + 3

total($n);

//末尾再起 = 自分自身の呼び出しが末尾呼び出しとなっている再帰関数
//演算結果を関数の引数としている
function fact3(int $n, int $acc)
{
    if ($n === 0) {
        return $acc;
    }
    echo '$n = ' . $n, PHP_EOL;
    echo '$acc = ' . $acc, PHP_EOL;
    return fact3($n - 1, $n * $acc);
}

function fact4(int $n)
{
    return fact3($n, 1);
}

//fact3(3,1)
//fact3(2,3)
//fact3(1,6)
//fact4(0,6)
//echo fact4($argv[1]), PHP_EOL;


//echo fact($argv[1]), PHP_EOL;

//再起呼び出すたびにメモリを取る
//アクティベーションレコード、スタック
//変数を保存するための領域が必要になる
//元の値を保持する必要がある
//
//$x = 1;
////こうちきほう
//echo $x--, PHP_EOL;
//echo $x, PHP_EOL;
//
////前置記法
//$y = 1;
//echo --$y, PHP_EOL;
//echo $y, PHP_EOL;
//
//try {
//    throw new Exception('foo');
//} catch (Exception $e) {
//    echo $e->getMessage(), PHP_EOL;
//} finally {
//    echo 'finally', PHP_EOL;
//}

//echo 0 / 1, PHP_EOL;

//短絡評価
$x = [] && hoge();

function hoge()
{
    echo 'hoge', PHP_EOL;
    return 1;
}

