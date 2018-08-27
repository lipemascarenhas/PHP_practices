<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vetores e Matrizes</title>
  </head>
  <body>
    <pre>
    <?php
      $v = array(9,5,3,1,7);
      print "<h4>Vetor original</h4>";
      print_r($v);
      print "<h4>Elementos do vetor ordenados</h4>";
      sort($v);
      print_r($v);
      print "<h4>Elementos do vetor ordenados de forma reversa</h4>";
      rsort($v);
      print_r($v);
      print "<h4>Ordenação associativa 'asort'</h4>";
      /*coloca o vetor em ordem,
      mas mantém a associatividade do índice*/
      asort($v);
      print_r($v);
      print "<h4>Ordenação associativa reversa 'arsort'</h4>";
      /*coloca o vetor em ordem reversa,
      mas mantém a associatividade do índice*/
      arsort($v);
      print_r($v);
    ?>
    </pre>
  </body>
</html>
