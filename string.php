<?php
//explode
$string1 = "learn | programming | with | PHP";
$arr = explode('|', $string1);

var_dump($string1);
echo '<br>';
var_dump($arr);

print_r($arr);
//implode
$string2 = implode('|',$arr);
echo $string2.'<br>';

//strlen
$string3 = 'learn programming with PHP';
echo strlen($string3).'<br>';
//str_word_count
echo str_word_count($string3);
?>

