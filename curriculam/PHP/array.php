<?php

/*
indexed array
associative array
multidimensional array
*/

//indexed array
$season = array("summer","winter","spring","autumn");
echo "Seasons are: $season[0], $season[1], $season[2] and $season[3] \n";

//associative array
$x = array("a" => 10,"b" => 20,"c" => 30);
echo "Value of a is :" . $x["a"] . "\n";
echo "Value of b is :" . $x["b"] . "\n";
echo "Value of b is :" . $x["c"] . "\n";

//multidimensional array
$y = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
for($i = 0;$i < 3;$i++) {
    for($j = 0;$j < 3;$j++) {
        echo $y[$i][$j] . "  ";
    }
    echo "\n";
}
