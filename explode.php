<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $stringa = "Calciosalto";

      $stringaesplosa = explode("l", $stringa);

      echo "<h2>Test con explode</h2>";
      echo "<br>";
      echo "<h3>Stringa di riferimento: </h3>".$stringa;
      echo "<br><br>";
      print_r ($stringaesplosa);
      echo "<br><br>";
      echo $stringaesplosa[0];
      echo "<br><br>";
      echo $stringaesplosa[1];
      echo "<br><br>";
      echo $stringaesplosa[2];
     ?>
  </body>
</html>
