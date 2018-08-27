<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $n1 = $_GET["a"];
      $n2 = $_GET["b"];
      echo "<h2>Valores recebidos: n1 = $n1 e n2 = $n2</h2>";
      $n = $n1 + $n2;
      echo "A soma de $n1 mais $n2 é igual a $n";
      echo "<h3>Operadores aritméticos</h3>";
      echo "</br>O valor absoluto de $n2 é ". abs($n2);
      echo "<br/>O valor de $n1 <sup>$n2</sup> é ". pow($n1, $n2);
      echo "<br/>A raiz de $n1 é ". sqrt($n1);
      echo "<br/>O valor de $n2 arredondado é ". round($n2);
      echo "<br/>A parte inteira de $n1 é ".intval($n1);
      echo "<br/>O valor de $n1 em moeda é R$".number_format($n1, 2, ",", ".");
     ?>
  </body>
</html>
