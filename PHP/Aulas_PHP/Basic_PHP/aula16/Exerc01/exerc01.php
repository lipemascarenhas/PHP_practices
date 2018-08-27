<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    print "<h2>PHP: printf</h2>";
      $p = "leite";
      $pr = 4.5;
      print "O $p custa R$ ".number_format($pr,2);
      printf ("<p>O %s custa R$ %.2f</p>", $p, $pr);

      print "<h2>PHP: print_r</h2>";
      $v[0] = 4;
      $v[1] = 8;
      $v[2] = 3;
      //print_r($v);

      $v2 = array(3,7,6,2,1,9);
      print_r($v2);

      print "<h2>PHP:  strlen</h2>";
      $txt = "Curso em vídeo";
      $tamanho = strlen($txt);
      print $tamanho;

      print "<h2>PHP:  trim</h2>";
      $nome = "   José da Silva   ";
      print (strlen($nome))."<br/>";
      $novo = trim($nome);
      print $novo."<br/>";
      print (strlen($novo))."<br/>";

      print "<h2>PHP:  ltrim</h2>";
      $nome = "   José da Silva   ";
      print (strlen($nome))."<br/>";
      $novo = ltrim($nome);
      print $novo."<br/>";
      print (strlen($novo))."<br/>";

      print "<h2>PHP:  str_word_count</h2>";
      $frase = "Eu vou estudar PHP agora";
      $cont = str_word_count($frase,2);
      print_r ($cont);

      print "<h2>PHP: explode</h2>";
      $site = "Curso em vídeo";
      $vetor = explode (" ",$site);
      print_r($vetor);

      print "<h2>PHP: str_split</h2>";
      $nome = "Maria";
      $vetor = str_split ($nome);
      print_r($vetor);


      print "<h2>PHP: implode</h2>";
      $vetor[0] = "Curso";
      $vetor[1] = "em";
      $vetor[2] = "vídeo";
      $texto = implode("#", $vetor);
      print($texto);

      print "<h2>PHP: chr</h2>";
      $letra = chr(67);
      print "A letra de número 67 é $letra";

      print "<h2>PHP: ord</h2>";
      $letra = "C";
      $cod = ord($letra);
      print "O código da letra $letra é $cod";
      ?>
  </body>
</html>
