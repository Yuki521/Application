<?php

namespace Yuki\lesson1;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function 配列から偶数のみを抽出する()
    {
        $actual = ArrayUtil::evensOf([1, 2, 3, 4, 5]);

        $this->assertEqualsCanonicalizing([2, 4], $actual);
    }
}
