<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country: </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php

    // array associativa = array feita por pares de key=>value

    // countries => capital
    // id => username
    // item => price

    $capitals = array("Brasil"=> "Brasilia",
                      "Russia"=> "Moscou",
                      "China"=> "Pequim",
                      "Camaroes"=>"Launde");

    $capital = $capitals[$_POST["country"]];

    echo "The capital is: " . $capital;

    //$capitals["Brasil"] = "Recife";  muda a capital
    //$capitals["Japao"] = "Toquio"; cria um novo pais com associative array
    //array_pop($capitals); tira os ultimos
    //array_shift($capitals); tira os primeiros
    //$keys = array_keys($capitals);
    //$values = array_values($capitals);
    //$capitals = array_flip($capitals); // toca capital por pais pais por capital
    //$capitals = array_reverse($capitals);
    //echo count ($capitals);
    
    /* foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    } */
?>