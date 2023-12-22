<?php
/*
call by value
call by reference
call by default value
*/

//call by value
function add_to($num1, $num2)
{
    echo "sum: $num1+$num2 \n";
}
add_to(5, 3);

//call by reference
$x = 10;
echo "Before calling the function:\n";
print_r($x);
function add(&$a)
{
    $a += 5;
}
add($x);
echo "\nAfter calling the function:\n";
print_r($x) ;
echo "\n";

//call by default value
function printMe($p=null)
{
    print $p;
}
printMe("hello");

