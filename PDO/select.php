<?php
require_once "connect.php";
/*1: select 1 row of data */ 
// $sql = "SELECT * FROM student"; //1
$sql = "SELECT * FROM student WHERE id =?";
$id = 6;

try {
    $statement = $conn->prepare($sql);
    $arr = [$id];

    // $selectStatus/*check if program running or not  */ = $statement->execute(); //1
    $statement->execute($arr); //$data inserted
    // $data = $statement->fetchAll(PDO::FETCH_NUM); //1
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
} catch (Exception $exp) {
    echo $exp->getMessage() . '<br>';
    echo 'File: ' . $exp->getFile() . '<br>';
    echo 'Line:' . $exp->getLine() . '<br>';
}
