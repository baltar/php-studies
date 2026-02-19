<?php
  $name = "Pedro";
  $food = "pizza";
  $email = "pedro123@gmail.com";

  //integers examples
  $age = 20;
  $users = 2;
  $quantity = 3;

  //float examples
  $gpa = 2.5;
  $price = 54.99;
  $tax_rate = 5.1;

  //booleans examples
  $employed = true;
  $online = false;
  $for_sale = true;

  $total = null;

  echo"Hello {$name}<br>";
  echo"You like {$food}<br>";
  echo"Your email is {$email}<br>";

  echo"You are {$age} years old <br>";
  echo"There are {$users} users online";
  echo"Would you like to buy {$quantity} items<br>";
  echo"Your gpa is: {$gpa} <br>";
  echo"Your pizza is: R\${$price}<br>";
  echo"The sales tax rate is: {$tax_rate}%<br>";
  
  
  echo"Online status: {$online}<br>"; // como status ta false, nao aparece nada, se fosse true, apareceria o numero 1

  //Situacao hipotetica, voce compra uma pizzaria e alguem faz um pedido online de x quantidade de pizzas
  echo"You have ordered {$quantity} x {$food}s <br>";
  $total = $quantity * $price;
  echo"Your total is: R\${$total}";
?>