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
      $v = array(0 =>"A", 4=>"B", 6=>"C", 10=>"D");
      $v[] = "E";
      unset($v[6]);
      print_r($v);
     ?>
      </pre>
   </div>
  </body>
</html>
