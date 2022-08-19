<?php

use Yuki\lesson5\CountCharacters;

require __DIR__ . '/vendor/autoload.php';

$path = $argv[1];
$target = $argv[2];

try{
    if(!file_exists($path)){
        throw new \Exception('ファイルがありません');
    }

    $countCharacters = new CountCharacters($target);
    $answers = $countCharacters->searchLines($path);
    foreach ($answers->getPathToLineNumbers() as $path => $lineNumbers) {
        $lineNumbers = implode(',',$lineNumbers);
        echo "{$path} {$lineNumbers}",PHP_EOL;
    }

}catch (\Exception $e){
    echo $e->getMessage(),PHP_EOL;
}