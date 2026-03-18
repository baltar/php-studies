<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"> <br>
        <label>password: </label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log in">
        </form>
</body>
</html>
<?php
        // exercicio com is set (condicao) empty (condicao)
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    

    if(empty($username)) {
        echo "username is missing";
    } elseif(empty($password)) {
        echo "password is missing";
    } 
    else {
        echo "Hello {$username}";
    }
}
    
    /* foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br> ";
    } */
    // isset() = retorna true se uma variavel e declara e not null
    // empty() = retorna true se uma variavel nao e declarada, falsa, ou null

    /* $username = "Pedro";
    
    if(isset($username)) {
        echo "This variable is set";
    } else {
        echo "This variable is not set";
    } */

    /* $username = "Pedro Baltar";

    if (empty($username)) {
        echo "This variable is Empty";
    } else {
        echo "This variable is not empty";
    } */
?>