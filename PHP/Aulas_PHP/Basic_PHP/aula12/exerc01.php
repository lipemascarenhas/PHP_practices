<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $val = isset($_GET["val"])?$_GET["val"]:1;
      echo "<h1>Calculando o fatorial de $val</h1>";
      $c = $val;
      $fat = 1;
      do{
        $fat = $fat*$c;
        $c--;
      }while ($c>=1);
      echo "<h2>$val! = $fat</h2>";
     ?>
  </body>
</html>
