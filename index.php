<?php
//factorial loop
$n = 10;
if ($n > 0) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    echo "result = ".$result.'<br>';
}
else{
    echo "the input is not valid";
}

