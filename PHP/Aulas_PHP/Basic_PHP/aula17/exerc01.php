<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      print "<h2>PHP: strtolower</h2>";
      $nome = "Gustavo Guanabara";
      print ("Seu nome é ".strtolower($nome));

      print "<h2>PHP: strtoupper</h2>";
      $nome = "Gustavo Guanabara";
      print ("Seu nome é ".strtoupper($nome));

      print "<h2>PHP: ucfirst</h2>";
      $nome = "gustavo guanabara";
      print ("Seu nome é ".ucfirst($nome));

      print "<h2>PHP: ucwords</h2>";
      $nome = "todas as primeiras letras em maiúsculo";
      print (ucwords($nome));

      print "<h2>PHP: strrev</h2>";
      $nome = "Gustavo Guanabara";
      print (strrev($nome));

      print "<h2>PHP: strpos</h2>";
      $frase = "Estou aprendendo PHP";
      $pos = strpos($frase, "PHP");
      print "A string foi encontrada na posição $pos";

      print "<h2>PHP: stripos</h2>";
      $frase = "Estou aprendendo PHP";
      $pos = stripos($frase, "php");
      print "A string foi encontrada na posição $pos";

      print "<h2>PHP: substr_count</h2>";
      $frase = "Estou aprendendo PHP no Curso em vídeo de PHP";
      $pos = substr_count($frase, "PHP");
      print "PHP foi encontrado $pos vezes";

      print "<h2>PHP: substr</h2>";
      $site = "Curso em vídeo";
      $sub = substr($site,0,5);
      print "$sub ";

      print "<h2>PHP: str_pad</h2>";
      $nome = "Guanabara";
      $novo = str_pad($nome, 40, " ", STR_PAD_LEFT);
      print "Meu professor $novo é lindo!";
      /*>>>STR_PAD_RIGH = Meu professor Guanabara           é lindo!
        >>>STR_PAD_LEFT = Meu professor          Guanabara é lindo!
        >>>STR_PAD_CENTER = Meu professor     Guanabara      é lindo!*/

      print "<h2>PHP: str_repeat</h2>";
      $txt = str_repeat("Php", 5);
      print ("O texto gerad foi $txt");
      /*>>>PhpPhpPhpPhpPhp*/

      print "<h2>PHP: str_replace</h2>";
      $frase = "Gosto de estudar Matemática!!!";
      $novafrase = str_replace("Matemática", "PHP", $frase);
      print "$novafrase";

      print "<h2>PHP: str_ireplace</h2>";
      $frase = "Gosto de estudar Matemática!!!";
      $novafrase = str_ireplace("matemática", "PHP", $frase);
      print "$novafrase";
    ?>
  </body>
</html>
