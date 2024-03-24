<?php
/*
$stmt = $con->prepare('INSERT INTO users (username, password, create_at, status) values (:username, :password, :create_at, :status)'); //increase data security
$username = 'rhein.web';
$password = '123';
$now = date('Y-m-d H:i:s');
$status = 1;
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':create_at', $now);
$stmt->bindParam(':status', $status);
$stmt->execute();//run SQL query
*/

require_once "connect.php";

$sql = "INSERT INTO student(fullname, age) VALUES(:fullname,:age)"; //SYNTAX, modifying them will cause error

//warning when error occurs
try {
    $statement = $conn->prepare($sql); //increase data security

    $fullname = 'Olga';
    $age = '22';

    // $statement->bindParam(':fullname', $fullname); //assign value to variable
    // $statement->bindParam(':age', $age);

    $data =[
        'fullname' => $fullname,
        'age' => $age
    ];
    // $insertStatus/*check if program running or not  */ = $statement->execute(); 
    $insertStatus/*check if program running or not  */ = $statement->execute($data); //$data inserted
    var_dump($insertStatus);
} catch (Exception $exception) {
    echo $exception->getMessage() . '<br>';
    echo 'File: ' . $exception->getFile() . '<br>';
    echo 'Line:' . $exception->getLine() . '<br>';
};
