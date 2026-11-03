<!DOCTYPE html>
<html>

<head>
  <title>Punto 10</title>
</head>

<body>
  <b>
    Punto 10: Lea una cantidad en chelines austriacos e imprima el equivalente en pesetas. Lea una cantidad en dracmas
    griegos e imprima su equivalente en francos franceses. Finalmente, lea una cantidad en pesetas e imprima su
    equivalente en dólares y liras italianas.
  </b>
  <br><br>

  <form method="POST">
    Chelines austríacos: <input type="number" step="any" name="chelines" required> <br><br>
    Dracmas griegos: <input type="number" step="any" name="dracmas" required> <br><br>
    Pesetas: <input type="number" step="any" name="pesetas" required> <br><br>
    <button type="submit">Convertir Divisas</button>
  </form>

  <?php
  if ($_POST) {
      $chelines = $_POST['chelines'];
      $dracmas = $_POST['dracmas'];
      $pesetas = $_POST['pesetas'];
      
      $pes_che = $chelines * (956.871 / 100);
      $pes_dra = $dracmas * (88.607 / 100);
      $francos = $pes_dra / 20.110;
      $dolares = $pesetas / 122.499;
      $liras = $pesetas / (9.289 / 100);
      
      echo "<br><b>Equivalente de $chelines chelines a pesetas: </b>" . $pes_che;
      echo "<br><b>Equivalente de $dracmas dracmas a francos franceses: </b>" . $francos;
      echo "<br><b>Equivalente de $pesetas pesetas a dólares: </b>" . $dolares;
      echo "<br><b>Equivalente de $pesetas pesetas a liras italianas: </b>" . $liras;
  }
  ?>
</body>

</html>