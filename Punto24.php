<!DOCTYPE html>
<html>

<head>
  <title>Punto 24</title>
</head>

<body>
  <b>
    Punto 24: Un hombre desea saber cuánto dinero se generará por concepto de intereses sobre la cantidad que tiene en
    inversión en el banco. El decidirá reinvertir los intereses siempre y cuando éstos excedan a $7000 y en ese caso,
    desea saber cuánto dinero tendrá finalmente en su cuenta.
  </b>
  <br><br>

  <form method="POST">
    Capital invertido: <input type="number" step="any" name="cap" required> <br><br>
    Tasa de interés mensual (%): <input type="number" step="any" name="tasa" required> <br><br>
    <button type="submit">Calcular Inversión</button>
  </form>

  <?php
  if ($_POST) {
      $cap = $_POST['cap'];
      $tasa = $_POST['tasa'];
      
      $int = $cap * ($tasa / 100);
      
      if ($int > 7000) {
          $final = $cap + $int;
          echo "<br><b>Los intereses ($" . $int . ") superan los $7000. Se reinvierten.</b>";
          echo "<br><b>Dinero final en la cuenta: $</b>" . $final;
      } else {
          echo "<br><b>Los intereses ($" . $int . ") no superan los $7000. No se reinvierten.</b>";
          echo "<br><b>Dinero final en la cuenta: $</b>" . $cap;
      }
  }
  ?>
</body>

</html>