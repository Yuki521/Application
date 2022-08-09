<?php

namespace Yuki\lesson5;

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
     * @param $path
     * @return array
     */
    public function getFileList($path): array
    {
        $files = glob(rtrim($path, '/') . '/*');
        $list = [];
        foreach ($files as $file) {
            if (is_file($file)) {
                $list[] = $file;
            }
            if (is_dir($file)) {
                $list = array_merge($list, $this->getFileList($file));
            }
        }
        return $list;
    }
}