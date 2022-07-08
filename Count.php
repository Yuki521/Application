<?php

use Yuki\lesson4\Answer;
use Yuki\lesson4\CountCharacter;

require __DIR__ . '/vendor/autoload.php';

//php CountCharacter.php src/lesson4/first.txt

$path = $argv[1];

try{
    if(!file_exists($path)){
        throw new \Exception('ファイルがありません');
    }

    $countCharacter = new CountCharacter($path);
    $countedCharacter = $countCharacter->countCharacter();

    $answer = new Answer($countedCharacter);

    foreach ($answer->getCountedCharacter() as $character => $number) {
        echo $character.' '.$number.PHP_EOL;
    }

    echo implode(',',$answer->getCharacters()).PHP_EOL;
    echo implode(',',$answer->getNumbers()).PHP_EOL;
}catch (\Exception $e){
    echo $e->getMessage().PHP_EOL;
}