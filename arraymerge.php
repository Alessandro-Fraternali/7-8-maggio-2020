<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Primo array:";
      $primo=['Frutta', 'verdura', 'cereali'];
      var_dump($primo);
      echo "<br>";
      echo "Secondo array:";
      $secondo=['carne', 'legumi', 'pesce'];
      var_dump($secondo);
      echo "<br>";
      echo "Terzo array:";
      $terzo=['formaggio', 'olio', 'spezie'];
      var_dump($terzo);
      echo "<br>";
      echo "Primo, secondo e terzo array uniti con array_merge:";
      $array = array_merge($primo, $secondo, $terzo);
      var_dump($array);
     ?>
  </body>
</html>
