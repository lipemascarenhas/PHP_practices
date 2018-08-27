<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $ds = isset($_GET['ds'])?$_GET['ds']:0;
      switch ($ds) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
          echo "Levanta e vai estudar!";
          break;
        case 7:
        case 8:
          echo 'Descanse. Namastê!';
          break;
        default:
          echo 'Digita certa essa caralha!';
      }
     ?>
     <p><a href="form_ex02.html">Voltar</a></p>
  </body>
</html>
