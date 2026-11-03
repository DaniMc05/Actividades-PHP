<!DOCTYPE html>
<html>

<head>
  <title>Punto 15</title>
</head>

<body>
  <b>
    Punto 15: Calcular y mostrar el monto total a pagar en un mes de luz eléctrica, teniendo como dato la lectura
    anterior, la lectura actual y el costo por kilovatio.
  </b>
  <br><br>

  <form method="POST">
    Lectura anterior (kW): <input type="number" step="any" name="ant" required> <br><br>
    Lectura actual (kW): <input type="number" step="any" name="act" required> <br><br>
    Costo por kilovatio: <input type="number" step="any" name="costo" required> <br><br>
    <button type="submit">Calcular Monto</button>
  </form>

  <?php
  if ($_POST) {
      $ant = $_POST['ant'];
      $act = $_POST['act'];
      $costo = $_POST['costo'];
      
      $consumo = $act - $ant;
      $total = $consumo * $costo;
      
      echo "<br><b>Kilovatios consumidos: </b>" . $consumo;
      echo "<br><b>Monto total a pagar: $</b>" . $total;
  }
  ?>
</body>

</html>