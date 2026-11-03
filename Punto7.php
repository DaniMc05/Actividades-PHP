<!DOCTYPE html>
<html>

<head>
  <title>Punto 7</title>
</head>

<body>
  <b>
    Punto 7: Un individuo desea saber cuántas pulgadas y cuántos pies hay en una cantidad de metros que él ingrese.
  </b>
  <br>
  <br>
  <form method="POST">
    Cantidad en metros: <input type="number" step="any" name="metros" required> <br><br>
    <button type="submit">Convertir</button>
  </form>

  <?php
    if ($_POST) {
        $metros = $_POST['metros'];
        
        $pulgadas = $metros * 39.27;
        $pies = $pulgadas / 12;
        
        echo "<br><b>Equivale a: </b>" . $pulgadas . " pulgadas.";
        echo "<br><b>Equivale a: </b>" . $pies . " pies.";
    }
    ?>
</body>

</html>