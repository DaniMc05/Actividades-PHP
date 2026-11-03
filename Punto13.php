<!DOCTYPE html>
<html>

<head>
  <title>Punto 13</title>
</head>

<body>
  <b>
    Punto 13: Determine cuánto dinero hay en un banco que contiene N1 billetes de 50000, N2 billetes de 20000, N3
    billetes de 10000, N4 billetes de 5000, N5 billetes de 2000, N6 billetes 1000, N7 billetes de 500 y N8 billetes de
    100.
  </b>
  <br><br>

  <form method="POST">
    Billetes de 50000 (N1): <input type="number" name="n1" required> <br><br>
    Billetes de 20000 (N2): <input type="number" name="n2" required> <br><br>
    Billetes de 10000 (N3): <input type="number" name="n3" required> <br><br>
    Billetes de 5000 (N4): <input type="number" name="n4" required> <br><br>
    Billetes de 2000 (N5): <input type="number" name="n5" required> <br><br>
    Billetes de 1000 (N6): <input type="number" name="n6" required> <br><br>
    Billetes de 500 (N7): <input type="number" name="n7" required> <br><br>
    Billetes de 100 (N8): <input type="number" name="n8" required> <br><br>
    <button type="submit">Calcular Total</button>
  </form>

  <?php
  if ($_POST) {
      $total = ($_POST['n1'] * 50000) + ($_POST['n2'] * 20000) + ($_POST['n3'] * 10000) + ($_POST['n4'] * 5000) + ($_POST['n5'] * 2000) + ($_POST['n6'] * 1000) + ($_POST['n7'] * 500) + ($_POST['n8'] * 100);
      
      echo "<br><b>Total de dinero en el banco: $</b>" . $total;
  }
  ?>
</body>

</html>