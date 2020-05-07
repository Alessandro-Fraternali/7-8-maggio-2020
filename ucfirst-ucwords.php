<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $pory = "questa stringa è scritta in minuscolo";
      $poryf = ucfirst($pory);
      $poryw = ucwords($pory);

      echo $pory;
      echo "<br><br>";
      echo "<h3>Stringa modificata con 'ucfirst:'</h3>";
      echo $poryf;
      echo "<br>";
      echo "<h3>Stringa modificata con 'ucwords:'</h3>";
      echo $poryw;
    ?>
  </body>
</html>
