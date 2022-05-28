<?php

use Yuki\lesson2\CalculateFactory;

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
    $formula = trim(fgets(STDIN));

    if ($formula == 'quit') {
        echo 'Goody bye.' . PHP_EOL;
        break;
    }

    list($operator, $x, $y) = explode(' ', $formula);
    $factory = new CalculateFactory();
    $calculate = $factory->create($operator);
    $answer = $calculate->calc($x, $y);

    echo $answer . PHP_EOL;


}