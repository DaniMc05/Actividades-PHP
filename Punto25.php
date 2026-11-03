<!DOCTYPE html>
<html>

<head>
  <title>Punto 25</title>
</head>

<body>
  <b>
    Punto 25: Escriba un algoritmo, que dado como dato el sueldo de un trabajador, le aplique un aumento del 15% si su
    sueldo es inferior a Bs. 40.000 y 12% en caso contrario. Imprima el nuevo sueldo del trabajador.
  </b>
  <br><br>

  <form method="POST">
    Sueldo del trabajador: <input type="number" step="any" name="sueldo" required> <br><br>
    <button type="submit">Calcular Nuevo Sueldo</button>
  </form>

  <?php
  if ($_POST) {
      $sueldo = $_POST['sueldo'];
      
      if ($sueldo < 40000) {
          $nuevo = $sueldo * 1.15;
          echo "<br><b>Aumento aplicado: 15%</b>";
      } else {
          $nuevo = $sueldo * 1.12;
          echo "<br><b>Aumento aplicado: 12%</b>";
      }
      
      echo "<br><b>El nuevo sueldo es: Bs </b>" . $nuevo;
  }
  ?>
</body>

</html>