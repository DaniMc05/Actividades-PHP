<!DOCTYPE html>
<html>

<head>
  <title>Punto 1</title>
</head>

<body>
  <b> Punto 1: Obtener el promedio de edad de tres personas </b><br><br>
  <form method="POST">
    Edad 1: <input type="number" name="ed1" required> <br><br>
    Edad 2: <input type="number" name="ed2" required> <br><br>
    Edad 3: <input type="number" name="ed3" required> <br><br>
    <button type="submit">Calcula el Promedio</button>
  </form>

  <?php
    if ($_POST) {
        $ed1 = $_POST['ed1'];
        $ed2 = $_POST['ed2'];
        $ed3 = $_POST['ed3'];
        
        $prom = ($ed1 + $ed2 + $ed3) / 3;
        
        echo "<br><b>El promedio de las edades es:</b> " . $prom;
    }
    ?>

</body>

</html>