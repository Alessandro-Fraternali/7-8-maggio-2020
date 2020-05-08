<?php
  function test($min, $max, $nItems)
  {
    $newarray = [];

    while (count($newarray) < $nItems) {
      $number = rand($min, $max);

      if(!in_array($number, $newarray)) {
        $newarray[] = $number;
      }
    }
    return $newarray;
  }

  // Richiamo la funzione
  $r = test(1, 8192, 5);
  var_dump($r);
 ?>
