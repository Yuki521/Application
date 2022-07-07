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

    public function countCharacter()
    {
        $contents = file_get_contents($this->path);
        $splitCharacters = mb_str_split(str_replace(PHP_EOL, '', $contents));
        $countEachCharacter = array_count_values($splitCharacters);
        arsort($countEachCharacter);

        return $countEachCharacter;
    }

}