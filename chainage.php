<?php

class Calc
{
  private $numbers = [];

  function __construct(...$numbers)
  {
    $this->numbers = $numbers;
  }
  function add()
  {
    echo array_sum($this->numbers);
    return $this;
  }
  function get_element()
  {
    global $i;
    $i = 1;
    array_map(function ($value) {
      global $i;
      echo "</br> The value N°$i is $value </br> ";
    }, $this->numbers);
  }
}

$calc = new Calc(5, 2, 3);

$calc->add()->get_element();