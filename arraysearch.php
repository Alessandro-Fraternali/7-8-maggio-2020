<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $array = [
        'nome:' => 'Alessandro',
        'cognome:' => 'Fraternali',
        'anni' => '26',
      ];
      echo "<h2>Array utilizzato nell'esercizio:</h2>";
      var_dump($array);
      echo "<h3>Cerco il valore 'Fraternali' con array_search per ottenerne la chiave:</h3>";
      $getkey = array_search('Fraternali', $array);
      echo $getkey;
     ?>
  </body>
</html>
