<?php
//count
$arr= array('html','js','php','css');
$arr2 = [
    'address1' => 'html',
    'address2' => 'css',
    'address3' => 'PHP',
    'address4' => 'JS',
];
echo count($arr);

//array_values
$arrNew = array_values($arr);
echo '<pre>';
print_r($arrNew);
echo '</pre>';

//array_keys
$arrKey = array_keys($arr2);
echo '<pre>';
print_r($arrKey);
echo '</pre>';

//array_pop

echo array_pop($arr2);

//is_array
echo "<br>".is_array($arr2);
//array_push 
array_push($arr2, 'django', "jerkin");

echo '<pre>';
print_r($arr2);
echo '</pre>';

//array_shift 
array_shift($arr2);

echo '<pre>';
print_r($arr2);
echo '</pre>';

//array_unshift 
$result = array_unshift($arr2, 'Java', 'Ruby');

echo '<pre>';
print_r($arr2);
echo '<br>'. $result. '</pre>';

//in_array check element is exist in array (1: true; : false)
$inArr = in_array('Java', $arr2);
echo 'Result: '. $inArr;

//sort
$sortArr = sort($arr);
echo '<br>Array after sort';
echo '<pre>';
print_r($arr);
echo '</pre>';

//array_reverse
$arrRev = array_reverse($arr);

echo 'Array after reverse';
echo '<pre>';
print_r($arrRev);
echo '</pre>';

//array_merge
$mergeArr = array_merge($arr, $arr2);

echo  'Array after merge';
echo '<pre>';
print_r($mergeArr);
echo '</pre>';

//array_rand take random
$randArr = array_rand($mergeArr, 3);
echo  'Array after taken key';
echo '<pre>';
print_r($randArr);
echo '</pre>';

//array_search
$arrSearch = array_search('PHP', $mergeArr);
echo '<pre>';
print_r($arrSearch);
echo '</pre>';

//array_slice($array,$startPos,$numberToSlice)
$sliceArr = array_slice($arrNew, 0,1);
echo '<pre>';
print_r($sliceArr);
echo '</pre>';

//array_unique
array_push($arrNew, 'php');
$uniqueArr = array_unique($arrNew);
echo '<br><pre>';
print_r($arrNew);
echo '</pre>';
echo '<br><pre>';
print_r($uniqueArr);
echo '</pre>';

//array_key_exists($key,)
$keyArr = array_key_exists('address3', $arr2);
var_dump($keyArr);
?>



