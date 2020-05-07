<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Array con chiavi e valori";
      $array = [
        'nome' => 'Francofrasso',
        'cognome' => 'Magenta',
        'anni' => '30',
        'altezza' => '80cm',
        'peso' => 2
      ];
      var_dump($array);
      echo "Le chiavi rimosse con array_keys<br>";
      $keys = array_keys($array);
      var_dump($keys);

      echo "I valori rimossi con array_values<br>";
      $values = array_values($array);
      var_dump($values);
     ?>
  </body>
</html>
