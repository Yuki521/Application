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
        $answer = new Answers();
        $this->collectAnswers($dir, $answer);
        return $answer;
    }

    /**
     * 指定したパスの中のファイルパスを再帰的に取得します
     *
     * @param string $dir
     * @param Answers $answer
     */
    public function collectAnswers(string $dir, Answers $answer): void
    {
        $files = scandir($dir);
        $files = array_filter($files, fn($file) => !in_array($file, ['.', '..']));

        foreach ($files as $file) {
            //ディレクトリセパレーター
            $path = rtrim($dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $file;
            if (is_file($path)) {
                $lineNumbers = $this->getMatchedLineNumbers($path);
                if (!empty($lineNumbers)) {
                    $answer->add($path, $lineNumbers);
                }
            }
            if (is_dir($path)) {
                $this->collectAnswers($path, $answer);
            }
        }

        //キーがファイルパスでバリューにターゲットに一致する文字列の行番号を配列で返す
        //Answer = アキュムレーター(Accumulator)
    }

    /**
     * ターゲットに一致した行番号を配列で返します
     *
     * @param $path
     * @return array
     */
    public function getMatchedLineNumbers($path): array
    {
        $handle = fopen($path, "r");

        try {
            $lines = [];
            $lineCounter = 1;
            while ($line = fgets($handle)) {
                if (preg_match('/' . $this->target . '/', $line)) {
                    $lines[] = $lineCounter;
                }
                $lineCounter++;
            }
        } finally {
            fclose($handle);
        }
        return $lines;
        //ターゲットに一致した行番号を配列で返す
    }
}