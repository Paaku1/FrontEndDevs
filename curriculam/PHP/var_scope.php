
<?php
    //global
    $x = 5;
    $y = 10;
    function add(){
        global $x,$y;//global variable
        $y = $x + $y;
    }
    add();
    echo "sum: ".$y."\n";

    //static
    function sub(){
        static $a = 10;
        print "Static Variable :".$a."\n";
        $a = $a -1;
    }
    sub();
    sub();
    sub();
?>