<?php

use Yuki\lesson4\Answer;
use Yuki\lesson4\CountCharacter;

require __DIR__ . '/vendor/autoload.php';

//php Count.php src/lesson4/first.txt

$path = $argv[1];

function printImplode($arrayMessage)
{
    echo implode(',',$arrayMessage).PHP_EOL;
}

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


    printImplode($answer->getCharacters());
    printImplode($answer->getNumbers());

}catch (\Exception $e){
    echo $e->getMessage().PHP_EOL;
}