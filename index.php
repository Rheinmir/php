<?php
include_once('func.php');
for($i = 0; $i < 10; $i++){
    if($i == 5){
        // break;
        continue;
    }
    echo $i. '<br>';
}

// die ("pause");
// exit("pause");

// for($i = 0; $i < 10; $i++){
//     if($i == 5){
//         continue;
//     }
//     echo $i. '<br>';
// }


$var1 = 7;
$var2 = 8;

$varSum = makeTotal($var1, $var2);
echo $varSum;
?>