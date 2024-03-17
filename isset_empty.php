<?php
//turn on warning about error
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

$var1 = 'rhein';

if(isset($var1)){
    echo $var1;
}

//Empty
echo '<br>';

$str = 0;
if(!empty($str)){
    echo $str;
}
else {
    echo 'Not valid';
}
?>