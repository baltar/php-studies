<?php

$date = date("1");

$date = "Monday";

switch($date) {
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "It is cuscuz tuesday";
        break;
    case "Wednesday":
        echo "The college week is half over!";
        break;
    case "Thursday":
        echo "It's almost the weekend!";
        break;
    case "Friday":
        echo "The weekend is here";
        break;
    case "Saturday":
        echo "Time to code";
        break;
    case "Sunday":
        echo "Time to relax";
        break;
    default:
        echo "{$date} is not a day";
}

?>