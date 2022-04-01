<?php
  $callback = $_GET['cb'];
  $arr = array("zhangsan","lisi","zhaoliu");
  echo $callback."(".json_encode($arr).")";
  
?>