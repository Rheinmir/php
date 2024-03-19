<?php
//is_numeric()
$var1 = 'rhein';
$result = is_numeric($var1);

var_dump($result);

//is_int()
$checkInt = is_int($var1);
echo '<br>';
var_dump($checkInt);

//is_float()
$checkFloat = is_float($var1);
echo '<br>'. 'float check';
var_dump($checkFloat);

//forcing int
$var2 = (int)$var1;
echo '<br>';
var_dump($var2);

//forcing float
$intNum = 5;
$intNum = (float)$intNum;
echo '<br>';
var_dump($intNum);

//round()
$var3 = 1.12331231;
$kq = round($bien3, 8);

echo '<br>'.$kq;
//floor()
$var3 = 1.12331231;
$kq = round($bien3, 8);

echo '<br>'.$kq;
?>