<?php

namespace Yuki\lesson5;

class Answers
{
    public array $answers;

    public function __construct()
    {
        $this->answers = [];
    }

    /**
     * @return array
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    /**
     * @param $key
     * @param $path
     * @param $nums
     * @return void
     */
    public function pair($key, $path, $nums): void
    {
        $tmp = implode(',', $nums);

        $this->answers[$key] = "{$path} {$tmp}";
    }
}