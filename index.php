<?php
//nested if else
    $var = 2;
    if($var > 0){ //if bool = true, then execute codes in scope
        if($var > 3){ //if bool = true, then execute codes in scope, if bool not true, then execute code in else's scope
            echo "var bigger than 3";
        }
        else {
            echo "var does not bigger than 3";
        }
    }
?>
