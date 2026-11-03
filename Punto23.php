<!DOCTYPE html>
<html>

<head>
  <title>Punto 23</title>
</head>

<body>
  <b>
    Punto 23: Suponga que a partir de una Tonelada de maíz una planta productora obtiene M kilogramos de harina y N
    litros de aceite. La planta vende cada bulto de 24 paquetes de un kilogramo de harina en Bs. B1 y cada caja de 15
    envases de aceite en Bs. B2. Calcular el ingreso total sabiendo que los restos se venden al detal a B3 y B4.
  </b>
  <br><br>

  <form method="POST">
    Kg de harina (M): <input type="number" step="any" name="m" required> <br><br>
    Litros de aceite (N): <input type="number" step="any" name="n" required> <br><br>
    Precio bulto harina (B1): <input type="number" step="any" name="b1" required> <br><br>
    Precio caja aceite (B2): <input type="number" step="any" name="b2" required> <br><br>
    Precio kg harina detal (B3): <input type="number" step="any" name="b3" required> <br><br>
    Precio litro aceite detal (B4): <input type="number" step="any" name="b4" required> <br><br>
    <button type="submit">Calcular Ingreso</button>
  </form>

  <?php
  if ($_POST) {
      $m = $_POST['m'];
      $n = $_POST['n'];
      $b1 = $_POST['b1'];
      $b2 = $_POST['b2'];
      $b3 = $_POST['b3'];
      $b4 = $_POST['b4'];
      
      $bultos = floor($m / 24);
      $rest_h = $m % 24;
      
      $cajas = floor($n / 15);
      $rest_a = $n % 15;
      
      $ing_bultos = $bultos * $b1;
      $ing_cajas = $cajas * $b2;
      $ing_rest_h = $rest_h * $b3;
      $ing_rest_a = $rest_a * $b4;
      
      $total = $ing_bultos + $ing_cajas + $ing_rest_h + $ing_rest_a;
      
      echo "<br><b>Ingreso total por la venta: Bs </b>" . $total;
  }
  ?>
</body>

</html>