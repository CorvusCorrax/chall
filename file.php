<?php
  echo "HELLO";
  $dabedidoo = file_get_contents("index.php");
  $dabedidoo = htmlspecialchars("<".$dabedidoo.">");
  var_dump($dabedidoo);
?>
