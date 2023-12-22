<?php
    /*
    • Arithmetic operators 
    • Assignment operators 
    • Comparison operators 
    • Increment/Decrement operators 
    • Logical operators 
    • String operators 
    • Array operators 
    • Conditional assignment operators
    */
    //comparison operators

    $x = 10;
    $y = 20;
    $z = 20;
    echo "Are x and y equal? ";
    if($x == $y) {
        echo "Yes\n";
    } 
    else{
        echo "No\n";
    }
    echo "Are y and z are not equal? ";
    if($y !== $z){
        echo "Yes\n";
    }
    else{
        echo "No";
    }
    echo "\n";

    echo "Is x greater than y? ";
    if ($x > $y){
        echo "Yes\n";
    }
    else{
        echo "No\n";
    }

        //spaceship <=>
    $a = 5;
    $b = 10;
    echo($a <=> $b)."\n";
    $a = 10;
    $b = 10;
    echo($a <=> $b)."\n";
    $b = 5;
    $a = 10;
    echo($a <=> $b)."\n";

    //null coalescing
    $r = $a ?? $b;
    echo "$r \n";
    $r = $c ?? $b;
    echo "$r \n";
?>
