<?php
namespace Sort;

class BubbleSort extends Sort
{
  public function sort()
  {
    $cnt = count($this->arr);

    $iterations = $cnt - 1;
    for ($i = 0; $i < $cnt; $i++) {
      $changes = false;
      for ($j = 0; $j < $iterations; $j++) {
        if ($this->arr[$j + 1] < $this->arr[$j]) {
          list($this->arr[$j + 1], $this->arr[$j]) = [$this->arr[$j], $this->arr[$j + 1]];
          $changes = true;
        }
      }
      $iterations--;
      if (!$changes) {
        return $this->arr;
      }
    }
    return $this->arr;
  }
}
