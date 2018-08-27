<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = $_GET["name"];
      $an = isset($_GET["an"])?$_GET["an"]:1900;
      $yo = date("Y-M-D")-$an;
      If ($yo>=18){
        $vota = "já pode votar";
        $dirige = "já pode dirigir";
      }
      else{
        $vota = "ainda não pode votar";
        $dirige = "ainda não pode dirigir";
      }
      echo "$name, tem $yo anos, $dirige e $vota";
     ?>
  </body>
</html>
