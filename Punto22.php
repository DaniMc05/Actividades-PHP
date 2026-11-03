<!DOCTYPE html>
<html>

<head>
  <title>Punto 22</title>
</head>

<body>
  <b>
    Punto 22: Un comerciante de computadores ofrece P precio por compra al contado ó 12 cuotas de T Bolívares cada una.
    Desarrolle un programa para calcular y mostrar cuál es el porcentaje que se cobra por el recargo en el pago del
    computador por cuotas.
  </b>
  <br><br>

  <form method="POST">
    Precio al contado (P): <input type="number" step="any" name="p" required> <br><br>
    Valor de cada cuota (T): <input type="number" step="any" name="t" required> <br><br>
    <button type="submit">Calcular Recargo</button>
  </form>

  <?php
  if ($_POST) {
      $p = $_POST['p'];
      $t = $_POST['t'];
      
      $total_cuotas = 12 * $t;
      $recargo = $total_cuotas - $p;
      $porcentaje = ($recargo * 100) / $p;
      
      echo "<br><b>Total pagado en 12 cuotas: Bs </b>" . $total_cuotas;
      echo "<br><b>Dinero de recargo: Bs </b>" . $recargo;
      echo "<br><b>Porcentaje de recargo: </b>" . $porcentaje . "%";
  }
  ?>
</body>

</html>