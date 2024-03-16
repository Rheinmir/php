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
echo str_word_count($string3).'<br>';
//str_repeat
echo str_repeat($string3,3).'<br>';
//str_replace
$string4 = "learning - program - with - php";
echo str_replace('-','|',$string4).'<br>';
//md5 encode
$string5 = 'learnphp';
echo md5($string5).'<br>';
//sha1 encode
echo sha1($string5).'<br>';
// htmlentities
echo htmlentities('<p>php</p>');
// html_entity_decode
$str = htmlentities('<b>php</b>');
echo '</br>html_entity_decode: '.html_entity_decode($str).'<br>';
//strip_tags
echo strip_tags('<b>php</b>');
//substr($string,$start,$length)
$string7 = "learn programming php <br>";
$string8 = "using MySQL";
$string9 = "MySQL";
$newString7 = substr($string7, 6, 11);
echo '<br>' .$newString7. '<br>';
//strstr($string,$start_str) //input starting characters and this func'll cut string from there
echo strstr($string7,'pr');
//strpos($string, $substr)
$strpos = strpos($string7, 'programming' );
echo $strpos. '<br>';
//substr_replace($string $replace,$position,$length)
echo substr_replace($string7, $string8, 6); // if not input length it'll replace all string after inputed position


//strtolower($str)// turn all string to lowercase
echo '<br>'.strtolower($string8);
//strtoipper($str)// turn all string to uppercase
echo '<br>'.strtoupper($string8);
//ucfirst
echo '<br>'.ucfirst($string8);
//lcfirst
echo '<br>'.lcfirst($string9);
//ucwords($str) first character of words in the string turn to uppercase
echo '<br>'.ucwords($string7);
//trim($str, $char) delete first and final character, if not input $char, it means space character.
echo '<br>'.trim('Enicode','e'); // distinguish uppercase and lowercase letters
//json_encode; json_decode
$arr= [1,2,3,4,5];
$jsonencode = json_encode($arr);
echo $jsonencode.'<br>';

$jsondecode = json_decode($jsonencode,true);
print_r($jsondecode);