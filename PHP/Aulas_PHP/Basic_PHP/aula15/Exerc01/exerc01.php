<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function teste(&$x){
        $x += 2;
        print "O valor de X é $x <br/>";
      }

      $a = 3;
      teste ($a);
      print "O valor de A é $a";
     ?>
  </body>
</html>
