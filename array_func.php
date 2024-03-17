<?php
//count
$arr= array('html','js','php','css');
$arr2 = [
    'address1' => 'html',
    'address2' => 'css',
    'address3' => 'PHP',
    'address3' => 'JS'
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
?>

