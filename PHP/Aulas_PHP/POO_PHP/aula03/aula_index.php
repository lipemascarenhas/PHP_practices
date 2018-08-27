<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 02 - POO</title>
  </head>
  <body>
    <pre>
    <?php
      require_once 'ClasseCaneta.php';
      $c1 = new Caneta;
      $c1 -> modelo = "BIC Crystal";
      $c1 -> cor = "Azul";
      //$c1 -> ponta = 0.5;
      //$c1 -> carga = 99;
      //$c1 -> tampada = true;

      $c1 -> rabiscar();
      $c1 -> tampar();

      print_r($c1);
     ?>
   </pre>
  </body>
</html>
