<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Inserimento di un valore nell'array";
      $array = ['Panfrancesco', 'Giupeppo', 'Fransassi'];
      var_dump ($array);
      echo "<br>";
      $array[] = 'Giaffroberto';
      var_dump ($array);

      echo "-----------------------------------------------------------------------------------";
      echo "<br><br><br>";

      echo "Inserimento di un valore e relativa chiave nell'array";
      $arrone = [
        'nome' => 'Francofrasso',
        'cognome' => 'Magenta',
        'anni' => '30'
      ];
      var_dump ($arrone);
      echo "<br>";
      $arrone['sesso'] = 'maschio';
      var_dump ($arrone);

     ?>
  </body>
</html>
