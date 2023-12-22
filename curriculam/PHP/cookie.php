<?php
$cookie_name = "user";
$cookie_value = 7007;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day?>
<html> 
    <body> 
        <?php if(isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is set <br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        } else {
            echo "Cookie '" . $cookie_name . "' is not set!<br>";
        } 
        if(count($_COOKIE)>0){
            echo "Cookies are enable";
        }
        ?> 
</body> 
</html>
