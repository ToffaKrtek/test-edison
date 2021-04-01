<?php
class User
{
  function __construct() {
    if (!isset($_SESSION['user'])){
      $_SESSION['user'] = array();
    }
  }
  public function addNum(int $num)
  {
    array_push($_SESSION['user'], $num);
  }
  public function getAllNums()
  {
    return $_SESSION['user'];
  }
}
