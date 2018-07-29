<?php

namespace Sort\Tests;


use Sort\QuickSort;

class QuickSortTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     */
    public function testRun()
    {
        $arr = [1, 3, 2, 12, 6, 2];

        $sorted = (new QuickSort($arr))->run();
        sort($arr);
        $this->assertEquals($arr, $sorted);
    }
}
