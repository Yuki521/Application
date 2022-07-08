<?php

namespace Yuki\lesson4;

class CountCharacter
{
    /**
     * @var string
     */
    private string $path;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * ファイルの中にある文字を種類ごとにカウントして多い順に返します。
     *
     * @return array
     */
    public function countCharacter(): array
    {
        $contents = file_get_contents($this->path);
        $splitCharacters = mb_str_split(str_replace(PHP_EOL, '', $contents));
        $countEachCharacter = array_count_values($splitCharacters);
        arsort($countEachCharacter);

        return $countEachCharacter;
    }

}