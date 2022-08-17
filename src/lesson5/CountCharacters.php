<?php

namespace Yuki\lesson5;

class CountCharacters
{
    /**
     * @var string
     */
    private string $target;

    /**
     * @param string $target
     */
    public function __construct(string $target)
    {
        $this->target = $target;
    }

    /**
     *
     *
     * @param $dir
     * @return Answers
     */
    public function searchLines($dir): Answers
    {
        $fileLists = $this->getFileLists($dir);
        $answer = new Answers();
        foreach ($fileLists as $fileKey => $path) {
            $nums = $this->search($this->getLines($path));
            if (!empty($nums)) {
                $answer->pair($fileKey,$path,$nums);
            }
        }

        return $answer;
    }

    /**
     * 指定したパスの中のファイルパスを再帰的に取得します
     *
     * @param $dir
     * @return array
     */
    public function getFileLists($dir): array
    {
        $files = scandir($dir);
        $files = array_filter($files, fn($file) => !in_array($file, ['.', '..']));

        $fileLists = [];
        foreach ($files as $file) {
            $path = rtrim($dir, '/') . '/' . $file;
            if (is_file($path)) {
                $fileLists[] = $path;
            }
            if (is_dir($path)) {
                $fileLists = array_merge($fileLists, $this->getFileLists($path));
            }
        }

        return $fileLists;
    }

    /**
     * 与えられたパスの内容を配列で返します
     *
     * @param $path
     * @return array
     */
    public function getLines($path): array
    {
        $handle = fopen($path, "r");

        try {
            $lines = [];
            while ($line = fgets($handle)) {
                $lines[] = trim($line);
            }
        } finally {
            fclose($handle);
        }
        return $lines;
    }


    /**
     * 与えられた複数行に指定の文字列が一致した場合その行数を配列で返します
     *
     * @param $lines
     * @return array
     */
    public function search($lines): array
    {
        $lineNumbers = [];
        foreach ($lines as $key => $line) {
            if (preg_match('/' . $this->target . '/', $line)) {
                $lineNumbers[] = $key + 1;
            }
        }
        return $lineNumbers;
    }

}