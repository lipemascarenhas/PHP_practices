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

      If ($yo<16){
        $voto = "não vota!";
      }
      elseif(($yo>=16&&$yo<18) || ($yo>65)){
          $voto = "voto opcional!";
        }
      else {
          $voto = "obrigatório!";
        }

      echo "<h3>$name, tem $yo anos, e seu tipo de voto é $voto</h3>";
     ?>
  </body>
</html>
