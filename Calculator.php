<?php

use Yuki\Lesson1\Lesson1\lesson2\Calculate;

require __DIR__ . '/vendor/autoload.php';

####### Q1 #######

//echo match ($argv[1]) {
//    '+' => $argv[2] + $argv[3] . PHP_EOL,
//    '-' => $argv[2] - $argv[3] . PHP_EOL,
//    'm' => $argv[2] * $argv[3] . PHP_EOL,
//    '/' => $argv[2] / $argv[3] . PHP_EOL,
//    default => '正しい符号を入力してください。' . PHP_EOL,
//};

####### Q2 #######

//$calculate = new Calculate($argv[1]);
//$answer = $calculate->calc($argv[2],$argv[3]);
//
//echo $answer. PHP_EOL;

####### Q3 #######

//$calculate = new Calculate($argv[1]);
//$answer = $calculate->calc($argv[2],$argv[3]);
//
//echo $answer. PHP_EOL;

####### Q4 #######

echo 'Welcome to Calculation.' . PHP_EOL;

while (true) {
    $stdin = trim(fgets(STDIN));

    if ($stdin == 'quit') {
        echo 'Goody bye.' . PHP_EOL;
        return false;
    }

    $formula = explode(' ', $stdin);
    $calculate = new Calculate($formula[0]);
    $answer = $calculate->calc($formula[1], $formula[2]);

    echo $answer . PHP_EOL;
}