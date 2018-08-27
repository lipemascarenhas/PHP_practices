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
      $n = array(
        array(2,3),
        array(3,4),
        array(9,5)
      );
      $n[2][0] = $n[1][1];
      print_r($n);
     ?>
      </pre>
   </div>
  </body>
</html>
