<?php

  function test($uno, $due){
    echo $uno . ": Hi";
    return $due . ": Surprise! I'm back!";
  }

  $a = "Pory";
  $b = "Jax";
  $r = test($a, $b);
  echo "<br>" . $r;
 ?>
