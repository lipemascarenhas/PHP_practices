<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <form action="tabuada.php" method="get">
        <select name="num">
          <?php
            for ($c=1; $c<=10 ; $c++) {
              echo "<option>$c</option>";
            }
           ?>
        </select>
        <input type="submit" value="Tabuada">
      </form>
    </div>
  </body>
</html>
