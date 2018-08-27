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
      print "<p>-print_r: </p>";
      print_r($v);
      print "<p>-var_dump: </p>";
      var_dump($v);
      print "<p>-count:</p>";
      $tot = count($v);
      print "<p>O vetor tem $tot elementos</p>";
      $v[] = "O";
      print "<p>-Vetor V depois de acrescentarmos uma string à array</p>";
      print_r($v);
    ?>
    </pre>
  </body>
</html>
