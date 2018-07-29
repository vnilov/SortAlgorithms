<?php


namespace Sort;


class InsertionSort extends Sort
{

    /**
     * Sort constructor.
     * @return array
     */
    protected function sort()
    {
        $arr = $this->arr;
        $length = count($arr);
        for ($i = 1; $i < $length; $i++) {
            $j = $i - 1;
            $tmp = $arr[$i];
            while ($tmp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
                if ($j > 0) {
                    $j--;
                }
            }
        }
        return $arr;
    }
}