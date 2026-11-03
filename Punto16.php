<!DOCTYPE html>
<html>

<head>
  <title>Punto 16</title>
</head>

<body>
  <b>
    Punto 16: Una empresa X trabaja con láminas de hierro para fabricar una pieza. Se conoce que (a) la lámina mide en
    promedio 4 metros de largo por 1.5 metros de ancho; (b) la pieza a fabricar consume 0.5 metros en total. Se requiere
    que calcule y muestre cuántas piezas se fabrican con una lámina y cuánto será el desperdicio.
  </b>
  <br><br>

  <form method="POST">
    Largo de la lámina (m): <input type="number" step="any" name="largo" required> <br><br>
    Ancho de la lámina (m): <input type="number" step="any" name="ancho" required> <br><br>
    Consumo por pieza: <input type="number" step="any" name="consumo" required> <br><br>
    <button type="submit">Calcular</button>
  </form>

  <?php
  if ($_POST) {
      $largo = $_POST['largo'];
      $ancho = $_POST['ancho'];
      $consumo = $_POST['consumo'];
      
      $area = $largo * $ancho;
      $piezas = (int)($area / $consumo);
      $desperdicio = $area - ($piezas * $consumo);
      
      echo "<br><b>Cantidad de piezas fabricadas: </b>" . $piezas;
      echo "<br><b>Desperdicio de la lámina: </b>" . $desperdicio;
  }
  ?>
</body>

</html>