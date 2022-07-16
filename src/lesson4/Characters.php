<?php

namespace Yuki\lesson4;

class Characters
{
    /**
     * @var array
     */
    private array $countedCharacter;

    public function __construct()
    {
        $this->countedCharacter = [];
    }

    /**
     * 与えられた行を分割し、$characterがなければ[$character]に0を追加、$characterがあれば[$character]に1を追加する
     *
     * @param string $line
     */
    public function addLine(string $line)
    {
        $characters = mb_str_split($line);

        foreach ($characters as $character) {
            if (!array_key_exists($character, $this->countedCharacter)) {
                $this->countedCharacter[$character] = 0;
            }
            $this->countedCharacter[$character] += 1;
        }
    }


    /**
     * 連想配列で文字とその数を返します
     *
     * ['a' => '200','b' =>'100']
     *
     * @return array
     */
    public function getCountedCharacter(): array
    {
        return $this->countedCharacter;
    }

    /**
     * countedCharacterをソートします
     */
    public function sort()
    {
        arsort($this->countedCharacter);
    }

    /**
     * 文字の種類を返します
     *
     * @return array
     */
    public function getCharacters(): array
    {
        return array_keys($this->countedCharacter);
    }

    /**
     * 文字の数を返します
     *
     * @return array
     */
    public function getNumbers(): array
    {
        return array_values($this->countedCharacter);
    }

}