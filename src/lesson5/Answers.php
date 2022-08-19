<?php

namespace Yuki\lesson5;

class Answers
{

    /**
     * @var array
     */
    private array $pathToLineNumbers;

    public function __construct()
    {
        $this->pathToLineNumbers = [];
    }

    /**
     * @return array
     */
    public function getPathToLineNumbers(): array
    {
        return $this->pathToLineNumbers;
    }

    /**
     * @param $path
     * @param $nums
     * @return void
     */
    public function add($path, $nums): void
    {
        $this->pathToLineNumbers[$path] = $nums;
        //keyがファイルパス
        //valueが行番号の列
        //のような辞書（map）

    }
}