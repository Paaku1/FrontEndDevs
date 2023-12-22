<?php

$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid\n");
} else {
    echo("Integer is not valid\n");
}

$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address\n");
} else {
    echo("$ip is not a valid IP address\n\n");
}

$email = "kohli@bcci.com"; 
// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address \n");
} else {
    echo("$email is not a valid email address\n");
}
