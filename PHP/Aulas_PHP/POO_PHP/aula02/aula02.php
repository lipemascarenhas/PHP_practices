<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 02 - POO</title>
  </head>
  <body>
    <?php
      require_once 'ClasseCaneta.php';
      $c1 = new Caneta;
      $c1 -> cor = "Azul";
      $c1 -> ponta = 0.5;
      $c1-> tampada = true;

      $c1 -> destampar();
      $c1 -> rabiscar();
      print_r($c1);

      $c2 = new Caneta;
      $c2 -> cor = "verde";
      $c2 -> carga = 50;
      $c2 -> tampada = false;
      print_r($c2);
     ?>
  </body>
</html>
