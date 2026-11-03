<!DOCTYPE html>
<html>

<head>
  <title>Punto 3</title>
</head>

<body>
  <b>
    Punto 3: Un vendedor recibe un sueldo base, más un 10% extra por comisiones de sus ventas. El vendedor desea saber
    cuánto
    dinero obtendrá por concepto de comisiones por las tres ventas que realizó en el mes y el total que recibirá tomando
    en cuenta su sueldo base y sus comisiones.
  </b>
  <br>
  <br>
  <form method="POST">
    Sueldo base: <input type="number" name="base" required> <br><br>
    Venta 1: <input type="number" name="v1" required> <br><br>
    Venta 2: <input type="number" name="v2" required> <br><br>
    Venta 3: <input type="number" name="v3" required> <br><br>
    <button type="submit">Calcular Sueldo</button>
  </form>

  <?php
    if ($_POST) {
        $base = $_POST['base'];
        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        $v3 = $_POST['v3'];
        
        $comision = ($v1 + $v2 + $v3) * 0.10;
        $total = $base + $comision;
        
        echo "<br><b>Ganancia por comisiones: $</b>" . $comision;
        echo "<br><b>Pago total del mes: $</b>" . $total;
    }
    ?>
</body>

</html>