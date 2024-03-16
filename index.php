<?php
//display even or odd (using for loop)
$start = 1;
$end = 100;

$oddCount = 0;
$evenCount = 0;

$oddResult = null;
$evenResult = null;

for($i = $start;$i <=100; $i++)
{
    //tcheck odd or even
    if($i % 2 == 0){
        $evenResult .= $i .'  ';
        $evenCount++;
    }
    else {
        $oddResult .= $i .'  ';
        $oddCount++;
    }
}

if($evenCount > 0){
    echo "Find out " .$evenCount." even number: ".$evenResult;
}
else {
    echo "Cant find evens";
}
echo '<br><br>';
if($oddCount > 0){
    echo "Find out " .$oddCount." odd number: ".$oddResult;
}
else {
    echo "Cant find odds";
}