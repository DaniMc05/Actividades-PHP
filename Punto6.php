<!DOCTYPE html>
<html>

<head>
  <title>Punto 6</title>
</head>

<body>
  <b>
    Un maestro desea saber qué porcentaje de hombres y qué porcentaje de mujeres hay en un grupo de estudiantes.
  </b>
  <br>
  <br>
  <form method="POST">
    Cantidad de hombres: <input type="number" name="hom" required> <br><br>
    Cantidad de mujeres: <input type="number" name="muj" required> <br><br>
    <button type="submit">Calcular Porcentaje</button>
  </form>

  <?php
    if ($_POST) {
        $hom = $_POST['hom'];
        $muj = $_POST['muj'];
        
        $total = $hom + $muj;
        
        if($total > 0){
            $porcH = ($hom * 100) / $total;
            $porcM = ($muj * 100) / $total;
            echo "<br><b>Hombres: </b>" . $porcH . "%";
            echo "<br><b>Mujeres: </b>" . $porcM . "%";
        }
    }
    ?>
</body>

</html>