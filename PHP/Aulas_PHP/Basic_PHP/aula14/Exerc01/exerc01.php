<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function soma($a, $b){
        $s = $a+$b;
        print "A soma vale $s<br/>";
      }
      soma(3,4);
      soma(8,2);
      $x = 9;
      $y = 15;
      soma($x,$y);
      print "Segundo exercício:<br/>";
      function sum ($aa, $bb) {
        $ss = $aa + $bb;
        return $ss;
      }
      $aa = 3;
      $bb = 4;
      $res = sum ($aa,$bb);
      print "A soma entre $aa e $bb é $res";
     ?>
  </body>
</html>
