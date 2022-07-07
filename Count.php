<?php

use Yuki\lesson4\CountCharacter;

require __DIR__ . '/vendor/autoload.php';

//php CountCharacter.php src/lesson4/first.txt

$path = $argv[1];

try{
    if(!file_exists($path)){
        throw new \Exception('ファイルがありません');
    }

    $countCharacter = new CountCharacter($path);

    foreach ( $countCharacter->countCharacter() as $character => $number) {
        echo $character.' '.$number.PHP_EOL;
    }
}catch (\Exception $e){
    echo $e->getMessage().PHP_EOL;
}