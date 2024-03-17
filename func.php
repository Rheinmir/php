<?php
$varGlobal = 100;
function makeTotal($a,$b){
    $sum = $a + $b;
    echo 'Sum are: '.$sum;
    return $sum;
}
    function doCount(){
        static $number = 0;
        $number++;
        echo $number.'<br>';
    }

doCount();
doCount();
doCount();
doCount();
?>