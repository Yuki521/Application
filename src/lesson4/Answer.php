<?php

namespace Yuki\lesson4;

class Answer
{
    /**
     * @var array
     */
    private array $countedCharacter;

    /**
     * @param array $countedCharacter
     */
    public function __construct(array $countedCharacter)
    {
        $this->countedCharacter = $countedCharacter;
    }

    /**
     * 連想配列で文字とその数を返します
     *
     * @return array
     */
    public function getCountedCharacter(): array
    {
        return $this->countedCharacter;
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