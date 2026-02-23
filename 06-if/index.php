<?php
    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0) {
        $weekly_pay = 0;
    } elseif($hours <=40) {
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You make R\${$weekly_pay} this week";
    
    
    
    
    
    
    
    //$adult = true;
    /* if($adult){ //usar $variavel ao inves de $varial == true, ja que ela ja vem como true, a nao ser que seja false
        echo "You may enter this site"; 
    } else {
        echo "You must be an adult to enter!";
    } */
    
    
    
    
    /* $age = 20;

     if ($age >= 100){
        echo "Too old";
    } elseif($age >= 18) {
        echo "Voce pode acessar esse site!"; 
    } elseif($age <= 0) {
        echo "Voce nao pode ter essa quantidade de aninhos! kappa klaus";
    } else {
        echo"Voce nao pode acessar esse site!";
    }  */
?> 