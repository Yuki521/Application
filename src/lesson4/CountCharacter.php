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
     * @return Characters
     */
    public function countCharacter(): Characters
    {
        $fp = fopen($this->path, "r");

        $answer = new Characters();

        while ($line = fgets($fp)) {
            $line = rtrim($line);
            $answer->addLine($line);
        }

        return $answer;
    }

}