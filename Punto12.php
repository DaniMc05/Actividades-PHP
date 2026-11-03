<!DOCTYPE html>
<html>
<head>
  <title>Punto 12</title>
</head>
<body>
  <b>
    Punto 12: Calcule y muestre, a un alumno, cuál será su promedio general en las tres materias más difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas.
  </b>
  <br><br>
  
  <form method="POST">
      <i>Matemática:</i><br>
      Examen: <input type="number" step="any" name="em" required> 
      Tareas(3): <input type="number" step="any" name="tm1" required> <input type="number" step="any" name="tm2" required> <input type="number" step="any" name="tm3" required><br><br>
      
      <i>Física:</i><br>
      Examen: <input type="number" step="any" name="ef" required> 
      Tareas(2): <input type="number" step="any" name="tf1" required> <input type="number" step="any" name="tf2" required><br><br>
      
      <i>Química:</i><br>
      Examen: <input type="number" step="any" name="eq" required> 
      Tareas(3): <input type="number" step="any" name="tq1" required> <input type="number" step="any" name="tq2" required> <input type="number" step="any" name="tq3" required><br><br>
      
      <button type="submit">Calcular Notas</button>
  </form>

  <?php
  if ($_POST) {
      $prom_tm = ($_POST['tm1'] + $_POST['tm2'] + $_POST['tm3']) / 3;
      $mat = ($_POST['em'] * 0.90) + ($prom_tm * 0.10);
      
      $prom_tf = ($_POST['tf1'] + $_POST['tf2']) / 2;
      $fis = ($_POST['ef'] * 0.80) + ($prom_tf * 0.20);
      
      $prom_tq = ($_POST['tq1'] + $_POST['tq2'] + $_POST['tq3']) / 3;
      $qui = ($_POST['eq'] * 0.85) + ($prom_tq * 0.15);
      
      $general = ($mat + $fis + $qui) / 3;
      
      echo "<br><b>Promedio de Matemática: </b>" . $mat;
      echo "<br><b>Promedio de Física: </b>" . $fis;
      echo "<br><b>Promedio de Química: </b>" . $qui;
      echo "<br><br><b>Promedio General: </b>" . $general;
  }
  ?>
</body>
</html>