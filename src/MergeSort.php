<?php


namespace Sort;


class MergeSort extends Sort
{

    /**
     * Sort constructor.
     * @return array
     */
    protected function sort()
    {
        return $this->mergeSort($this->arr);
    }

    /**
     * @param $arr
     * @return array
     */
    function mergeSort($arr) {

        $length = count($arr);
        if ($length === 1) return $arr;

        $middle = floor($length / 2);

        $left = array_slice($arr, 0, $middle);
        $right = array_slice($arr, $middle);
        $left = $this->mergeSort($left);
        $right = $this->mergeSort($right);

        return $this->merge($left, $right);
    }

    /**
     * @param $left
     * @param $right
     * @return array
     */
    private function merge($left, $right) {
        $result = [];

        while (count($left) > 0 && count($right) > 0) {

            if ($left[0] > $right[0]) {
                $result[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $result[] = $left[0];
                $left = array_slice($left, 1);
            }
        }

        if (count($left) > 0) {
            $result = array_merge($result, $left);
        }

        if (count($right) > 0) {
            $result = array_merge($result, $right);
        }

        return $result;
    }
}