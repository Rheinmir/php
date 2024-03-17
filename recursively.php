<?php
/*
Fibonacci: 0,1,1,2,3,5,8,13,21,...
Fibonancci number is sum of 2 fibonacci number before it
$n = 5
-> return fibonacci(4) + fibonacci(3)
= fibonacci(3) + fibonacci(2) + fibonacci(2) + 
= fibonacci(2) + fibonacci(1) + fibonacci(1) + fibonacci(0) + fibonacci(1) + fibonacci(0) + fibonacci(1)
= fibonacci(1) + fibonacci(0) + fibonacci(1) + fibonacci(1) + fibonacci(0) + fibonacci(1) + fibonacci(0) + fibonacci(1)
= 1 + 0 + 1 + 1 + 0 + 1 + 0 + 1
= 5
*/

function fibonancci($n){
    if($n == 0 || $n == 1){
        return $n;
    }
    return fibonancci($n-1) + fibonancci($n-2);
}

$result = fibonancci(5);

echo $result;
?>