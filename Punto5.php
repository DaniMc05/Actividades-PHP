<!DOCTYPE html>
<html>

<head>
  <title>Punto 5</title>
</head>

<body>
  <b>Punto 5: Un alumno desea saber cuál será su calificación final en la materia de computación. Dicha calificación
    se compone de los siguientes porcentajes: 55% del promedio de sus tres calificaciones parciales,
    30% de la calificación del examen final y 15% de la calificación de un trabajo final.
  </b>
  <br><br>
  < < <form method="POST">
    Parcial 1: <input type="number" step="any" name="p1" required> <br><br>
    Parcial 2: <input type="number" step="any" name="p2" required> <br><br>
    Parcial 3: <input type="number" step="any" name="p3" required> <br><br>
    Examen final: <input type="number" step="any" name="exa" required> <br><br>
    Trabajo final: <input type="number" step="any" name="trab" required> <br><br>
    <button type="submit">Calcular Nota</button>
    </form>

    <?php
    if ($_POST) {
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $exa = $_POST['exa'];
        $trab = $_POST['trab'];
        
        $prom = ($p1 + $p2 + $p3) / 3;
        $final = ($prom * 0.55) + ($exa * 0.30) + ($trab * 0.15);
        
        echo "<br><b>La calificación final es: </b>" . $final;
    }
    ?>
</body>

</html>