<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $stringa = "Il mio animale preferito è il leone, senza dubbio.";

    $lb = str_replace("leone", "corvo", $stringa);

    echo $stringa;
    echo "<br><br><br><br>";
    echo "stringa modificata tramite str_replace:";
    echo "<br><br>";
    print_r ($lb);

     ?>
  </body>
</html>
