<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <pre>
    <?php
      $cad = array(
        "nome"=>"Ana",
        "idade"=>23,
        "peso"=>78.5
      );
      $cad["fuma"]=true;
      print_r($cad);

      foreach ($cad as $campo => $value) {
        print "O valor de $campo é $value<br/> ";
      }
     ?>
      </pre>
   </div>
  </body>
</html>
