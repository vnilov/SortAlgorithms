<?php

namespace Sort;

abstract class Sort
{
    protected $arr;

    /**
     * Sort constructor.
     * @param $arr
     */
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    /**
     * Sort constructor.
     * @return array
     */
    abstract protected function sort();

    /**
     * @return array
     */
    public function run()
    {
        return static::sort();
    }
}