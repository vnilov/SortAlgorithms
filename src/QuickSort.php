<?php

namespace Sort;

class QuickSort extends Sort
{
    /**
     * QuickSort constructor.
     * @return array
     */
    protected function sort(): array
    {
        $left = 0;
        $right = count($this->arr) - 1;
        return $this->qSort($this->arr, $left, $right);
    }

    /**
     * @param $arr
     * @param $left
     * @param $right
     * @return array
     */
    private function qSort($arr, $left, $right): array
    {
        $l = $left;
        $r = $right;
        $m = $arr[(int) (($left + $right) / 2)];

        do {
            while ($arr[$r] > $m) {
                $r--;
            }

            while ($arr[$l] < $m) {
                $l++;
            }

            if ($l <= $r) {
                list($arr[$l], $arr[$r]) = [$arr[$r], $arr[$l]];
                $l++;
                $r--;
            }

        } while ($l <= $r);

        if ($l < $right) {
            $arr = $this->qSort($arr, $l, $right);
        }

        if ($left < $r) {
            $arr = $this->qSort($arr, $left, $r);
        }

        return $arr;
    }
}
