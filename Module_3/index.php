<?php
$num= -5;
if ($num < 0) {
    echo ("$num is less than 0");
}

    echo "<br>";
    $age = 15;
    if(($age > 12) && ($age < 20)) {
        echo "You are teenanger";
    } 
    echo "<br>";
    if ($age < 20) {
        echo "You are under 18";
    }

    else    { 
        echo "You are adult";
    } 


    if ($num > 0) {
        echo "The value $num is negative";
    }

    else if ($num == 0){
        echo "The valu is 0";
    }

    else {
        echo "The value $num is positive";
    }
     
    $a= 50;
    $b= 10;

    if ($a == $b) {
        echo ("$a is greater than 10");
    }
    
    else if ($a > $b) {
        echo ("$a is greate than $b");
    }

    else {
        echo "false";
    }
    


?>