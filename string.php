<?php
//take 5 characters in end of the string
$string = "learn programming php";
$endStr = substr($string, -5);
echo '5 character in the end of the string is: ' .$endStr.'<br>';

$string2 = "Học lập trình php";
$endStr2 = mb_substr($string2, -9, null, 'UTF-8'); //mb_substr($string,$position, $length,'encoding') execute special character
echo '9 character in the end of the string is: ' .$endStr2.'<br>';

//Delete the first character in the string
$strName = 'Rhein Mir';
$posSpace = strpos($strName,' ');// find posistion of the first space

$posStr = $posSpace + 1; //started position of the word after first space

//Length of string want to cut
$endWordLen = strlen($strName) - $posStr;

//Cut string
$endWord = substr($strName, $posStr, $endWordLen);
echo '<br>'. $endWord.'<br>';

//Delete the first character in the string
$strName2 = 'Trần Hoàng Gia';
$posSpace2 = mb_strpos($strName2,' ',0, 'UTF-8');// mb_strpos($string,$strFindPos,$offset,'UTF-8') find posistion of the first space

$posStr2 = $posSpace2 + 1; //started position of the word after first space

//Length of string want to cut
$endWordLen2 = mb_strlen($strName2, 'UTF-8') - $posStr2;

//Cut string
$endWord2 = mb_substr($strName2, $posStr2, $endWordLen2);
echo '<br>'.$endWord2.'<br>';
?>