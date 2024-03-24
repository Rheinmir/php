<?php
/*
Client -> server(execute) -> database -> Client

SQL: Structured Query Language
MySQL: database management software, update with high frequency

CLASS already created .time() .date() 
*/



//CREATE CLASS
class rhein {
    public function summary($a, $b){
        $sum = $a + $b;
        echo $sum .'</br>';
    }
    public function show(){
        echo 'This is a function in class </br>';
    }
}

/* varriable extended attribute of Class */
$var1 = new rhein;
$var1 -> show();
$a = 10;
$b = 5;

$var1 -> summary($a, $b);
?>