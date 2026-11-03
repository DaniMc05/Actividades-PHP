<!DOCTYPE html>
<html>

<head>
  <title>Punto 26</title>
</head>

<body>
  <b>
    Punto 26: Dados los datos A, B, C y D que representan números enteros; escriba un algoritmo que calcule el resultado
    de las siguientes expresiones: Si D=0 (A-C)^2. Si D>0 ((A-B)^3)/D.
  </b>
  <br><br>

  <form method="POST">
    Valor A: <input type="number" name="a" required> <br><br>
    Valor B: <input type="number" name="b" required> <br><br>
    Valor C: <input type="number" name="c" required> <br><br>
    Valor D: <input type="number" name="d" required> <br><br>
    <button type="submit">Calcular Expresión</button>
  </form>

  <?php
  if ($_POST) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      $d = $_POST['d'];
      
      if ($d == 0) {
          $res = pow(($a - $c), 2);
          echo "<br><b>D es igual a 0. El resultado de (A-C)^2 es: </b>" . $res;
      } elseif ($d > 0) {
          $res = pow(($a - $b), 3) / $d;
          echo "<br><b>D es mayor que 0. El resultado de (A-B)^3 / D es: </b>" . $res;
      } else {
          echo "<br><b>D es negativo. La expresión no está definida en el problema.</b>";
      }
  }
  ?>
</body>

</html>