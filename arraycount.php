<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $array = ['si', 'ciao', 8, 'forse', 5, 'no', 'ok'];
    $contato = count($array);
    echo "<h3>Contenuti dell'array:</h3>";
    var_dump ($array);
    echo "<h3>Numero di elementi nell'array contati con count:</h3>";
    echo $contato;
     ?>
  </body>
</html>
