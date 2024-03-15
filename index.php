<?php
    $var = 2;
    if($var > 10){ //if bool = true, then execute codes in scope, if bool not true, then execute code in else's scope
        echo "var bigger than 10";
    }
    else if($var > 5){ //if bool = true, then execute codes in scope, if bool not true, then execute code in else's scope
        echo "var1 bigger than 5";
    }
    else if($var > 3){ //if bool = true, then execute codes in scope, if bool not true, then execute code in else's scope
        echo "var bigger than 3";
    }
    else {
        echo "var does not meet any conditions";
    }
?>
