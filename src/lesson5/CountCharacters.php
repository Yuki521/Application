<?php

namespace Yuki\lesson5;

use Yuki\lesson4\Characters;

class CountCharacters
{
    private string $path;
    private string $target;

    /**
     * @param string $path
     * @param string $target
     */
    public function __construct(string $path, string $target)
    {
        $this->path = $path;
        $this->target = $target;
    }

    /**
     * 指定したパスの中のファイルパスを再帰的に取得します
     *
     * @param $path
     * @return array
     */
    public function getFileLists($path): array
    {
        $files = glob(rtrim($path, '/') . '/*');
        $fileLists = [];
        foreach ($files as $file) {
            if (is_file($file)) {
                $fileLists[] = $file;
            }
            if (is_dir($file)) {
                $fileLists = array_merge($fileLists, $this->getFileLists($file));
            }
        }

        return $fileLists;
    }

    /**
     *
     *
     * @param array $fileLists
     */
    public function getLineNumbers(array $fileLists)
    {
        foreach ($fileLists as $path) {
            $lines = $this->getLines($path);
            $nums = $this->search($lines);
            if(!empty($nums)){
                echo $path.' ';
                echo implode(' ', $nums).PHP_EOL;
            }
        }
    }

    /**
     *
     *
     * @param $path
     * @return array
     */
    public function getLines($path): array
    {
        $handle = fopen($path, "r");

        try {
            $files = [];
            while ($line = fgets($handle)) {
                $files[] = trim($line);
            }
        } finally {
            fclose($handle);
        }
        return $files;
    }


    /**
     * @param $lines
     * @return array
     */
    public function search($lines): array
    {
        $lineNumbers = [];
        foreach ($lines as $key => $line) {
            if (preg_match('/'.$this->target.'/', $line)) {
                $lineNumbers[] = $key + 1;
            }
        }
        return $lineNumbers;
    }

}