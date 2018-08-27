<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $plan = $_GET["plan"];
      $colab = isset($_GET["colab"])?$_GET["colab"]:0;
      $off = isset($_GET["off"])?$_GET["off"]:0;
      $fixo = 99;
      if ($plan == 'basic') {
        $percolab = 3;
        $plan = "Básico";
        $month = $percolab*$colab;
        $value = $fixo+$month;
        $anual = $value*12;
      } elseif ($plan == 'complete') {
        $percolab = 6;
        $plan = "Completo";
        $month = $percolab*$colab;
        $value = $fixo+$month;
        $anual = $value*12;
      }
      elseif ($plan == 'super') {
        $percolab = 20;
        $plan = "Super (Avaliação de desempenho)";
        $month = $percolab*$colab;
        $value = $month;
        $anual = $value*12;
      }
      echo "<h3>Você tem $colab colaboradores</h3>";
      echo "<h3>Plano: $plan</h3>";
      echo "<h3>Implantação: R$ $month</h3>";
      echo "<h3>Valor por colaborador: R$ $percolab";
      echo "<h3>Mensalidade: R$ $value</h3>";
      if ($off>0) {
        $percolab = $percolab-($percolab*$off);
        $month = $percolab*$colab;
        $value = $fixo+$month;
      }
      else {
        $percolab = "Sem desconto!";
        $value = "Sem desconto!";
      }
      echo "<h3>Valor com desconto por colab: R$ $percolab</h3>";
      echo "<h3>Valor mensal c/ desconto: R$ $value<h3/>";
     ?>
  </body>
</html>
