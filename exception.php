<?php
/*
try{

}
catch(){

}
-> execute exception when error occurs, still run regularly
*/
$age =18;
try {
    //coding
    echo 'Program: Im running<br>';
    // rhein();
    if($age <20){
        throw new Exception('Cops: Age must be bigger than 20!');
    }
}catch(Error $exception) {
    echo 'Program: OUCH!<br>';
    echo $exception -> getMessage().'<br>';
    echo 'File: '. $exception -> getFile().'<br>';
    echo 'Line:'.$exception -> getLine().'<br>';
}
catch(Exception $exception) {
    echo 'Program: OUCH!<br>';
    echo $exception -> getMessage().'<br>';
    echo 'File: '. $exception -> getFile().'<br>';
    echo 'Line:'.$exception -> getLine().'<br>';
};

echo 'Program: Im still alive<br>';