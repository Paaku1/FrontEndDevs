<?php

/*
• String
• Integer
• Float(floating point numbers - also called double)
• Boolean
• Array
• Object
• NULL
• Resource
*/
$a = "hypertext preprocessor"; //string
$b = 10; //integer
$c = 3.14; //float
$d = true; //boolean
$e = array(1,"2",3,4,5); //array
$f = new stdClass(); //object
$g = null;//NULL

echo var_dump($a) . "" . $a . "\n" .
var_dump($b) . "" . $b . "\n" .
var_dump($c) . "" . $c . "\n" .
var_dump($d) . "" . $d . "\n" .
var_dump($e) . "" . $e[1] . "\n" .
var_dump($g) . "" . $g;
