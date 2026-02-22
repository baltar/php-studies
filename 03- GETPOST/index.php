<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GETPOST</title>
</head>
<body>
  <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
</form>
<form action="index.php" method="post">
    <label>quantity:</label> <br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
</form>
</body>
</html>

<?php
    echo "{$_POST["username"]} <br>"; 
    echo "{$_POST["password"]} <br>";


    $item = "pizza";
    $price = 49.99;
    $quantity = $_POST["quantity"];
    $total = $quantity * $price;

    echo"Voce pediu {$quantity} x {$item}/s <br>";
    echo"O seu total e: R\${$total}";
  // acima, se eu tivesse usado o $_GET, os valores de username e password iriam ficar expostos, podendo ate mudar o valor na url pra mudar no site


    //    $_GET, $_POST = variaveis especiais usadas para coletar dados dde um HTML form
    //    o dado e mandado para o arquivo no atributo de acao de <form>
    //    <form action="some_file.php" method="get">

/*    $_GET = O dado e "appended" para o url
      NAO SEGURO
      char limit
      Bookmark e possivel com valores (?)
      GET requests podem ser cached
      Melhor para uma pagina de pesquisa
*/

/*
      $_POST = O dado e packaged dentro do body do HTTP request
      MAIS SEGURO
      Sem limite de dados
      Nao pode ter bookmarks (?)
      GET requests nao sao cached
      Melhor para enviar credenciais 
*/



?>