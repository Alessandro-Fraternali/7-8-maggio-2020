<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2 style="color:red">Inserisci nella barra di ricerca name, mail e age.</h2>
    <?php
      // passare come parametri get name mail e age e verificare che name sia lungo almeno 3 lettere, che mail contenga . e @ e che age sia un numero. Stampare accesso riuscito/negato
      $name = $_GET["name"];
      $mail = $_GET["mail"];
      $age = $_GET["age"];

      $namelenght = strlen($name);
      $maildot = strpos($mail, ".");
      $mailsnail = strpos($mail, "@");
      $agen = is_numeric($age);
      // $namelenght >= 3
      // $maildot > 0 && $mailsnail > 0

      if ($namelenght >= 3 && $age && $maildot && $mailsnail > 0){
        echo "<h1>Benvenuto</h1>";
      }else{
        echo "<h1>Accesso negato</h1>";
      }

      echo "<h2>I dati da te inseriti sono:</h2><h3>Nome: $name<br>Mail: $mail<br>Età: $age";

     ?>
  </body>
</html>
