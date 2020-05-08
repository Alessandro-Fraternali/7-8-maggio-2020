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
    var_dump($newarray);
    return $newarray;
  }

  // Richiamo la funzione
  $r = test(1, 99, 5);
  print_r($r);
 ?>
