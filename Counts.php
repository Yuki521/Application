<?php

use Yuki\lesson5\CountCharacters;

require __DIR__ . '/vendor/autoload.php';

$path = $argv[1];
$target = $argv[2];

try{
    //ディレクトリかどうか
    if(!file_exists($path)){
        throw new \Exception('ファイルがありません');
    }

    $countCharacters = new CountCharacters($path,$target);

    //1つにまとめる
    $fileLists = $countCharacters->getFileLists($path);
    //単一責務の原則に反している
    $countCharacters->getLineNumbers($fileLists);

    //呼び出すためのクラスを作る

}catch (\Exception $e){
    echo $e->getMessage().PHP_EOL;
}