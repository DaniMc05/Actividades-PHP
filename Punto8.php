<!DOCTYPE html>
<html>

<head>
  <title>Punto 8</title>
</head>

<body>
  <b>
    Punto 8: Calcule el área de un triángulo en función de las longitudes de sus lados, utilizando la
    fórmula:√p(p­a)(p­b)(p­c) donde p = (a+b+c) / 2
  </b>
  <br><br>

  <form method="POST">
    Lado A: <input type="number" step="any" name="a" required> <br><br>
    Lado B: <input type="number" step="any" name="b" required> <br><br>
    Lado C: <input type="number" step="any" name="c" required> <br><br>
    <button type="submit">Calcular Área</button>
  </form>

  <?php
  if ($_POST) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      
      $p = ($a + $b + $c) / 2;
      $adentro = $p * ($p - $a) * ($p - $b) * ($p - $c);
      
      if ($adentro > 0) {
          $area = sqrt($adentro);
          echo "<br><b>El área del triángulo es: </b>" . $area;
      } else {
          echo "<br><b>Con esos lados no se puede formar un triángulo válido.</b>";
      }
  }
  ?>
</body>

</html>