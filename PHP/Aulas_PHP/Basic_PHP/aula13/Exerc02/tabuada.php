<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($c=1; $c<=10 ; $c++) {
          $r=$n*$c;
          echo "$n x $c = $r<br/>";
        }
       ?>
       <br/> <a href="javascript:history.go(-1)">Voltar</a>
    </div>
  </body>
</html>
