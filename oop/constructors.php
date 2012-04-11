<?php

class one {
  public $ttt = 500;
  
  function __construct() {
    $this->ttt++  ;
  }
}

$one = new one();
echo $one->ttt;
?>
