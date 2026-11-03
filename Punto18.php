<!DOCTYPE html>
<html>

<head>
  <title>Punto 18</title>
</head>

<body>
  <b>
    Punto 18: Resuelva el problema que tienen en una gasolinera. Los surtidores de la misma registran lo que surten en
    galones, pero el precio de la gasolina está fijado en litros. Se requiere que calcule y muestre lo que hay que
    cobrarle a un cliente, considerando que:
  </b>
  <br>
  (a) cada galón tiene 3.785 litros;
  <br>
  (b) el precio del litro es de 100 Bolívares.

  <br><br>

  <form method="POST">
    Galones surtidos: <input type="number" step="any" name="galones" required> <br><br>
    <button type="submit">Calcular Cobro</button>
  </form>

  <?php
  if ($_POST) {
      $galones =$_POST['galones'];
      $litros =$galones * 3.785;
      $cobro =$litros * 100;
      
      echo "<br><b>Litros surtidos: </b>" . $litros;
      echo "<br><b>Total a cobrar: Bs </b>" . $cobro;
  }
  ?>
</body>

</html>