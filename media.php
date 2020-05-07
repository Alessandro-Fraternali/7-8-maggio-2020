<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>
      <?php

      $min = 100;
      $max = 1;
      $avg = 0;

      for ($i=0; $i < 10 ; $i++) {
        $numero = rand(1,100);

        if ($numero < $min) {
          $min = $numero;
        }

        if ($numero > $max) {
          $max = $numero;
        }

        $avg += $numero;

        echo $numero , "<br>";
      }
      $avg /= 10;

      echo "<br>----------------<br>";

      echo "min: " . $min . "<br>";

      echo "max: " . $max . "<br>";

      echo "avg: " . $avg . "<br>";

       ?>
    </h1>

  </body>
</html>
