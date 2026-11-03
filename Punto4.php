<!DOCTYPE html>
<html lang="en">

<head>
  <title>Punto 4</title>
</head>

<body>
  <b>
    Punto 4: Una tienda ofrece un descuento del 15% sobre el total de la compra y un cliente desea saber cuánto deberá
    pagar
    finalmente por su compra.
  </b>
  <br>
  <br>
  <form method="POST">
    Total de la compra: <input type="number" name="compra" required> <br><br>
    <button type="submit">Calcular Pago</button>
  </form>

  <?php
    if ($_POST) {
        $compra = $_POST['compra'];
        $desc = $compra * 0.15;
        $pagar = $compra - $desc;
        
        echo "<br><b>El total a pagar con descuento es: $</b>" . $pagar;
    }
    ?>
</body>

</html>