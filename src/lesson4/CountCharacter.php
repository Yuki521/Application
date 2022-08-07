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
        $handle = fopen($this->path, "r");

        try {
            $answer = new Characters();

            while ($line = fgetsx($handle)) {
                $line = trim($line);
                $answer->addLine($line);
            }
        } finally {
            fclose($handle);
        }

        return $answer;
    }
}