<?php

namespace Yuki;

class CountCharacter
{
    /**
     * ファイルの中の文字を取得します
     *
     * @param string $filename
     * @return false|string
     */
    public function getCharacter(string $filename): bool|string
    {
        $handle = fopen($filename,'r');
        $contents = fread($handle, filesize($filename));
        fclose($handle);
        return $contents;
    }

    /**
     * 文字を種類ごとにカウントします
     *
     * @param array $splitCharacters
     * @return array
     */
    public function countCharacter(array $splitCharacters): array
    {
        return array_count_values($splitCharacters);
    }

}

//php CountCharacter.php src/lesson4/first.txt

$filename = $argv[1];

try{
    if(!file_exists($filename)){
        throw new \Exception('ファイルがありません');
    }
    $countCharacter = new CountCharacter();
    $characters = $countCharacter->getCharacter($filename);
    $splitCharacters = str_split($characters);
    $countEachCharacter = $countCharacter->countCharacter($splitCharacters);
    arsort($countEachCharacter);

    foreach ($countEachCharacter as $character => $number) {
        echo $character.' '.$number.PHP_EOL;
    }
}catch (\Exception $e){
    echo $e->getMessage().PHP_EOL;
}
