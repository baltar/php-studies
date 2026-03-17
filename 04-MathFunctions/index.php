<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
  <label>x:</label>
  <input type="text" name="x"> <br>
  <label>y:</label>
  <input type="text" name="y"> <br>
  <label>z:</label>
  <input type="text" name="z"> <br>
  <input type="submit" value="total"> 

    </form>
</body>
</html>
<?php
   $x = $_POST["x"];
   $y = $_POST["y"];
   $z = $_POST["z"];
   $total = null;
   //$total = abs($x); deixa um numero absoluto, ex: -99 = 99
   //$total = round($x); arredonda
  //$total = ceil($x); arredonda pra cima
  //$total = pow($x, $y); x elevado a y
  //$total = sqrt($x); square root do numero
  //$total = max($x, $y, $z); o maior entre as variaveis
  //$total = min($x, $y, $z); mostra o menor
  //$total = pi(); printa pi
  //$total = rand(); talvez inutil porem lega, mostra um numero aleatorio 
  //$total = rand(1, 8); funcao legal, como um dado
   echo $total;
?>