<?php

use Yuki\lesson4\Characters;
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
    $characters = $countCharacter->countCharacter();

    $characters->sort();

    foreach ($characters->getCountedCharacter() as $character => $number) {
        echo $character.' '.$number.PHP_EOL;
    }

//    printImplode($characters->getCharacters());
//    printImplode($characters->getNumbers());

}catch (\Exception $e){
    echo $e->getMessage().PHP_EOL;
}