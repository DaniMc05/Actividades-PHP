<!DOCTYPE html>
<html>

<head>
  <title>Punto 19</title>
</head>

<body>
  <b>
    Punto 19: En un hospital rural existen tres áreas: Ginecología, Pediatría y Traumatología. El presupuesto anual del
    hospital se reparte conforme a la siguiente tabla: Ginecología 40%, Traumatología 30%, Pediatría 30%. Obtener la
    cantidad de dinero que recibirá cada área, para cualquier monto presupuestado.
  </b>
  <br><br>

  <form method="POST">
    Monto presupuestado: <input type="number" step="any" name="monto" required> <br><br>
    <button type="submit">Calcular Presupuesto</button>
  </form>

  <?php
  if ($_POST) {
      $monto = $_POST['monto'];
      $gin = $monto * 0.40;
      $tra = $monto * 0.30;
      $ped = $monto * 0.30;
      
      echo "<br><b>Ginecología (40%): $</b>" . $gin;
      echo "<br><b>Traumatología (30%): $</b>" . $tra;
      echo "<br><b>Pediatría (30%): $</b>" . $ped;
  }
  ?>
</body>

</html>