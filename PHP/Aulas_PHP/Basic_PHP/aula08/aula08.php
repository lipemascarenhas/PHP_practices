<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $valor = $_GET["v"];
      echo "O valor enviado foi $valor";
      $raiz = sqrt($valor);
      echo "<br/>A raiz quadrada de $valor é igual a ".number_format($raiz, 2);
     ?>
     <a href="form.html"><br/>Voltar</a>
  </body>
</html>
