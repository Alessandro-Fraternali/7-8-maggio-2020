<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Prendere un paragrafo abbastanza lungo e dividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo -->
    <?php
      $paragrafo = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in .Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";

      $scoppio = explode(".", $paragrafo);

      echo "<h3>Paragrafo completo:</h3>".$paragrafo;
      echo "<h3>Paragrafo diviso ad ogni punto:</h3>";
      echo "<p>".$scoppio[0]."</p>";
      echo "<p>".$scoppio[1]."</p>";
      echo "<p>".$scoppio[2]."</p>";
      echo "<p>".$scoppio[3]."</p>";
      echo "<p>".$scoppio[4]."</p>";

     ?>
  </body>
</html>
