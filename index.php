<?php
// declare integer
$var1 = 8;
// forcing type
$var_test1 = '8';
$var2 = (int)$var_test1;
var_dump($var2);
//check type (1 true nothing false)
echo is_int($var_test1);
echo is_int($var2);
// declare boolean (bool), 0 null and nothing is false, if not its true
echo '<br><br>';
$var3 = true; //or false
$var_test3 = 'true';
$var4 = (bool)$var_test3;
var_dump($var4);
echo is_bool($var3);

//declare float
echo '<br><br>';
$var5 = 18.8;
$var_test5 = '18.8';
$var6 = (float)$var_test5;
var_dump($var6);
echo is_float($var5);

//declare string
echo '<br><br>';
$var7 = 'rhein';
$var_test7 = 10;
$var8 = (string)$var_test7;
var_dump($var7);
echo is_string($var_test7);

?>