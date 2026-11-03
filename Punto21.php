<!DOCTYPE html>
<html>

<head>
  <title>Punto 21</title>
</head>

<body>
  <b>
    Punto 21: Un mayorista compra a un agricultor un lote de X naranjas a Bs. Y la docena. Después de vender todas las
    naranjas a los detallistas, obtiene Bs. K. Calcular el porcentaje de ganancia obtenida en la inversión.
  </b>
  <br><br>

  <form method="POST">
    Cantidad de naranjas: <input type="number" step="any" name="x" required> <br><br>
    Precio por docena: <input type="number" step="any" name="y" required> <br><br>
    Dinero obtenido al vender: <input type="number" step="any" name="k" required> <br><br>
    <button type="submit">Calcular Ganancia</button>
  </form>

  <?php
  if ($_POST) {
      $x = $_POST['x'];
      $y = $_POST['y'];
      $k = $_POST['k'];
      
      $docenas = $x / 12;
      $inversion = $docenas * $y;
      $ganancia = $k - $inversion;
      $porcentaje = ($ganancia * 100) / $inversion;
      
      echo "<br><b>Inversión inicial: Bs </b>" . $inversion;
      echo "<br><b>Ganancia neta: Bs </b>" . $ganancia;
      echo "<br><b>Porcentaje de ganancia: </b>" . $porcentaje . "%";
  }
  ?>
</body>

</html>