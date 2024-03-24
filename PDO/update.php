<?php
require_once "connect.php";

$sql = "UPDATE student SET fullname = :fullname, age = :age WHERE id = :id"; //SYNTAX, modifying them will cause error

//DATA
$fullname = 'Gill';
$age = 21;
$id = 9;
$data =[
    'fullname' => $fullname,
    'age' => $age,
    'id' => $id
];

try{
    $statement = $conn -> prepare($sql);
    // $statement -> bindParam('fullname', $fullname);
    // $statement -> bindParam('age', $age);
    // $statement -> bindParam('id', $id);

    $updateStatus/*check if program running or not  */ = $statement->execute(); 
    if($updateStatus){
        echo 'Update successful';
    }
}catch (Exception $exception) {
    echo $exception->getMessage() . '<br>';
    echo 'File: ' . $exception->getFile() . '<br>';
    echo 'Line:' . $exception->getLine() . '<br>';
};
?>