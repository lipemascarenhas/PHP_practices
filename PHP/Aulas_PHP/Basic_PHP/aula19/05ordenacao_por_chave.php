<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vetores e Matrizes</title>
  </head>
  <body>
    <pre>
    <?php
      $n = array(3 => 'C', 2 => 'E', 0 => 'H', 1 => 'B');
      print_r($n);
      print "<h4>Colocando as chaves (índices) em ordem</h4>";
      ksort($n); #coloca os índices em ordem, e não dos valores
      print_r ($n);
      print "<h4>Colocando as chaves (índices) em ordem reversa</h4>";
      krsort($n); #coloca os índices em ordem reversa, e não dos valores
      print_r ($n);
    ?>
    </pre>
  </body>
</html>
