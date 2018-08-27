<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vetores e Matrizes</title>
  </head>
  <body>
    <pre>
    <?php
      $v = array("A", "J", "M", "X", "K");
      print "<h4>Array original</h4>";
      print_r($v);
      print "<h4>Elemento adicionado ao início</h4>";
      array_unshift($v, "O"); #adiciona um novo elemento no início da array
      print_r($v);
      print "<h4>Primeiro elemento eliminado</h4>";
      array_shift($v); #elimina o primeiro elemento da array
      print_r($v);
    ?>
    </pre>
  </body>
</html>
