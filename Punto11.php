<!DOCTYPE html>
<html>

<head>
  <title>Punto 11</title>
</head>

<body>
  <b>
    Punto 11: Se conoce de un trabajador su nombre, el número de horas normales trabajadas, el pago de una hora
    normal y el número de horas extras trabajadas. Además, que, cada hora extra se paga 25% más del
    valor de una hora normal. Si se deducen al trabajador sobre el sueldo base 5% del paro forzoso, 2%
    de política habitacional y 7% para caja de ahorro. Si se le asignan 25000 Bolívares por actualización
    académica, 17300 Bolívares por cada hijo y una prima por hogar de 18000 Bolívares. Calcule y
    muestre las asignaciones, las deducciones y el sueldo neto del trabajador.
  </b>
  <br><br>

  <form method="POST">
    Nombre: <input type="text" name="nom" required> <br><br>
    Horas normales: <input type="number" step="any" name="hn" required> <br><br>
    Pago por hora normal: <input type="number" step="any" name="phn" required> <br><br>
    Horas extras: <input type="number" step="any" name="he" required> <br><br>
    Número de hijos: <input type="number" name="hijos" required> <br><br>
    <button type="submit">Calcular Liquidación</button>
  </form>

  <?php
  if ($_POST) {
      $nom = $_POST['nom'];
      $hn = $_POST['hn'];
      $phn = $_POST['phn'];
      $he = $_POST['he'];
      $hijos = $_POST['hijos'];
      
      $base = $hn * $phn;
      
      $deducciones = $base * 0.14;
      
      $pago_he = $he * ($phn * 1.25);
      $asig = 25000 + ($hijos * 17300) + 18000 + $pago_he;
      
      $neto = ($base + $asig) - $deducciones;
      
      echo "<br><b>Trabajador: </b>" . $nom;
      echo "<br><b>Total Asignaciones (incluye extras): Bs </b>" . $asig;
      echo "<br><b>Total Deducciones: Bs </b>" . $deducciones;
      echo "<br><b>Sueldo Neto a pagar: Bs </b>" . $neto;
  }
  ?>
</body>

</html>