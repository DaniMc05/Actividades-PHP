<!DOCTYPE html>
<html>

<head>
  <title>Punto 17</title>
</head>

<body>
  <b>
    Punto 17: Dados como datos el precio final pagado por un producto y su precio de venta al público (PVP), se requiere
    que calcule y muestre el porcentaje de descuento que le ha sido aplicado.
  </b>
  <br><br>

  <form method="POST">
    Precio de venta al público (PVP): <input type="number" step="any" name="pvp" required> <br><br>
    Precio final pagado: <input type="number" step="any" name="pf" required> <br><br>
    <button type="submit">Calcular Descuento</button>
  </form>

  <?php
  if ($_POST) {
      $pvp = $_POST['pvp'];
      $pf = $_POST['pf'];
      
      $dinero_descontado = $pvp - $pf;
      $porcentaje = ($dinero_descontado * 100) / $pvp;
      
      echo "<br><b>El porcentaje de descuento aplicado fue del: </b>" . $porcentaje . "%";
  }
  ?>
</body>

</html>