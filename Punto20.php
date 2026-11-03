<!DOCTYPE html>
<html>

<head>
  <title>Punto 20</title>
</head>

<body>
  <b>
    Punto 20: Calcule qué tanto por ciento anual cobraron por un préstamo de Bolívares X, si se pagaron Bolívares Y de
    intereses en 4 años. La fórmula del interés es: Capital * Tiempo * Razón / 100
  </b>
  <br><br>

  <form method="POST">
    Capital prestado (X): <input type="number" step="any" name="x" required> <br><br>
    Intereses pagados (Y): <input type="number" step="any" name="y" required> <br><br>
    <button type="submit">Calcular Porcentaje Anual</button>
  </form>

  <?php
  if ($_POST) {
      $x = $_POST['x'];
      $y = $_POST['y'];
      
      $razon = ($y * 100) / ($x * 4);
      
      echo "<br><b>El porcentaje anual cobrado fue del: </b>" . $razon . "%";
  }
  ?>
</body>

</html>