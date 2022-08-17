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
    $x = fact2($n - 1);
    return $x * $n;
}

//fact2(3)
//fact2(2) * 3
//fact2(1) * 2 * 3
//fact2(0) * 1 * 2 * 3
//1 * 1 * 2 * 3


//echo fact($argv[1]), PHP_EOL;

//再起呼び出すたびにメモリを取る
//アクティベーションレコード、スタック
//変数を保存するための領域が必要になる
//元の値を保持する必要がある

$x = 1;
//こうちきほう
echo $x--, PHP_EOL;
echo $x, PHP_EOL;

//前置記法
$y = 1;
echo --$y, PHP_EOL;
echo $y, PHP_EOL;

try {
    throw new Exception('foo');
}catch (Exception $e){
    echo $e->getMessage(),PHP_EOL;
} finally {
    echo 'finally', PHP_EOL;
}