<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h2>Parte 01</h2>";
      $preco = $_GET["p"];
      echo "O preço do produto é R$".number_format($preco, 2);
      $preco += ($preco*0.10);
      echo "<br/>O novo preço com 10% de aumento é R$".number_format($preco, 2);
      echo "<br/><h2>Parte 02</h2>";
      $atual = $_GET["aa"]; //Essa linha pega o ano na URL
      echo "O ano atual é $atual e o ano anterior é ". --$atual;
      /*Comentarios multilinhas
      sao comentarios que duram mais
      que uma linha*/
      echo "<h2>Parte 03</h2>";
      $a = 3;
      $b = &$a;
      $b += 5;
      echo "A variável A vale $a";
      echo "<br/>A variável B vale $b";
      echo "<h2>Parte 04</h2>";
      $x = "abc";
      $$x = "def";
      echo "O conteúdo da variável X é $x";
      echo "<br/>A variável criada recebeu $x";
     ?>
  </body>
</html>
