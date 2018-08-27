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
      array_push($v, "O"); #adiciona um elemento ao final da array
      print "<h4>Adicionado o elemento 'O'</h4>";
      print_r($v);
      array_pop($v); #elimina o último elemento da array
      print "<h4>Eliminamos o último elemento [5] do vetor</h4>";
      print_r($v);
    ?>
    </pre>
  </body>
</html>
