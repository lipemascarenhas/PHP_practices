<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $n1 = $_GET["a"];
      $n2 = $_GET["b"];
      $tipo = $_GET["op"];
      echo "Os valores foram $n1 e $n2 <br/>";
      $r = ($tipo=="s")?$n1+$n2:$n1*$n2;
      echo "$tipo é igual a, então o resultado é igual a $r";
      echo"<h2>Iguais e idêntico: diferenças entre eles</h2>";
      $a = 3;
      $b = "3";
      $r = $a===$b?'verdadeiro':'falso';
      echo "<br/>As variáveis A e B são iguais? $r";
      echo "<h2>Situação com média</h2>";
      $nota1 =  $_GET["n1"];;
      $nota2 = $_GET["n2"];
      $m = ($nota1+$nota2)/2;
      echo "A média entre $nota1 e $nota2 = $m<br/>";
      echo "O aluno está ".(($m<6)?"REPROVADO":"APROVADO");
      echo "<h2>Utilização de operadores lógicos</h2>";
      $ano = $_GET["an"];
      $idade = date('Y') - $ano;
      echo "Quem nasceu em $ano tem idade de $idade anos.";
      $tipo = ($idade>=18 and $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
      echo "<br/>E dessa forma seu voto é $tipo";
     ?>
  </body>
</html>
