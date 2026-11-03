<!DOCTYPE html>
<html>

<head>
  <title>Punto 2</title>
</head>

<body>
  <b>
    Punto 2: Suponga que un individuo decide invertir su capital en un banco y desea saber cuánto
    dinero ganará después de un mes si el banco paga a razón de 2% mensual.
  </b>
  <br>
  <br>
  <form method="POST">
    Capital a invertir es: $
    <input type="number" name="cap" required>
    <button type="submit">Calcular</button>
  </form>

  <?php
    if ($_POST) {
        $cap = $_POST['cap'];
        $ganancia = $cap * 0.02;
        
        echo "<br><b>Después de un mes, tus ganancias serán: $</b>" . $ganancia;
    }
    ?>

</body>

</html>