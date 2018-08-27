<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vetores e Matrizes</title>
  </head>
  <body>
    <pre>
      <table border="1"><tr>
    <?php
      print "<h1>Vetores em PHP</h1>";
      $c = range(5,20,2);
      #print_r($c);

      foreach ($c as $v) {
        print "<td>$v ";
      }
    ?>
      </table>
    </pre>
  </body>
</html>
