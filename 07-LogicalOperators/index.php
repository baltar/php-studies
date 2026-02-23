<?php
    $age = 20; // acima da idade minima para votar
    $citizen = true; //e um cidadao, logo, pode votar
    
    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior){
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo "The ticket price is R\${$ticket}";
    
    
    /* if(!$age >= 18 || !$citizen){
        echo "You cant vote!";
    } else {
        echo "Voce pode votar!";
    } */
    
    /* if($age >= 18 && $citizen){
        echo "You can vote!";
    } else {
        echo "Voce nao pode votar!";
    } */
    
    
    
    
    
    /* $temp = 23;
    $cloudy = false; 

    if($temp < 0 || $temp > 30) { // || or, uma das duas condicoes precisa ser verdadeira, pra ser verdadeiro
        echo "The wheater is bad.<br>";
    } else {
        echo "The wheater is good<br>";
    }

    if(!$cloudy) {
        echo "And it's sunny!";
    } else {
        echo "And it's cloudy!";
    } */
?>