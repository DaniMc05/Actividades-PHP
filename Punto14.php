<!DOCTYPE html>
<html>

<head>
  <title>Punto 14</title>
</head>

<body>
  <b>
    Punto 14: El siguiente sistema de ecuaciones lineales: ax + by = c, dX + eY = f. Calcule y muestre el valor de X e
    Y.
  </b>
  <br><br>

  <form method="POST">
    a: <input type="number" step="any" name="a" required>
    b: <input type="number" step="any" name="b" required>
    c: <input type="number" step="any" name="c" required> <br><br>
    d: <input type="number" step="any" name="d" required>
    e: <input type="number" step="any" name="e" required>
    f: <input type="number" step="any" name="f" required> <br><br>
    <button type="submit">Calcular X e Y</button>
  </form>

  <?php
  if ($_POST) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      $d = $_POST['d'];
      $e = $_POST['e'];
      $f = $_POST['f'];
      
      $denominador = ($a * $e) - ($b * $d);
      
      if ($denominador != 0) {
          $x = (($c * $e) - ($b * $f)) / $denominador;
          $y = (($a * $f) - ($c * $d)) / $denominador;
          
          echo "<br><b>Valor de X: </b>" . $x;
          echo "<br><b>Valor de Y: </b>" . $y;
      } else {
          echo "<br><b>El sistema no tiene solución única.</b>";
      }
  }
  ?>
</body>

</html>