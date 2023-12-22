<?php
    /* 
    for
    while
    do-while
    foreach
    */

    //for
    $a = array(1,2,3,4,5,6,7,8,9,10);
    $n = sizeof($a);
    print "array ";
    for( $i = 0 ; $i < $n ; $i++){
        print $a[$i]."  ";
    }
    echo "\n";
    print "continue condition ";
    for( $i = 0 ; $i < $n ; $i++){
        if($a[$i]=== 4){
            continue;
        }
        print $a[$i]."  ";
    }
    echo "\n";
    print "break condition ";
    for( $i = 0 ; $i < $n ; $i++){
        if($a[$i]=== 4){
            break;
        }
        print $a[$i]."  ";
    }
    echo "\n";

    //foreach

    echo "foreach array \n";
    foreach($a as $i){
        print "value is $i \n";
    }
?>