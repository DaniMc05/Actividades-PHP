<!DOCTYPE html>
<html>

<head>
  <title>Punto 9</title>
</head>

<body>
  <b>
    Punto 9: Calcular el salario neto de un trabajador en función del número de horas trabajadas, el precio de la hora y
    considerando un descuento fijo al sueldo base por concepto de impuestos del 20%.
  </b>
  <br><br>

  <form method="POST">
    Horas trabajadas: <input type="number" step="any" name="horas" required> <br><br>
    Precio por hora: <input type="number" step="any" name="precio" required> <br><br>
    <button type="submit">Calcular Salario</button>
  </form>

  <?php
  if ($_POST) {
      $horas = $_POST['horas'];
      $precio = $_POST['precio'];
      
      $base = $horas * $precio;
      $desc = $base * 0.20;
      $neto = $base - $desc;
      
      echo "<br><b>Salario base: $</b>" . $base;
      echo "<br><b>Descuento (20%): $</b>" . $desc;
      echo "<br><b>Salario neto final: $</b>" . $neto;
  }
  ?>
</body>

</html>