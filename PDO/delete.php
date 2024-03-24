<?php
    require_once "connect.php";
    $sql = "DELETE FROM student WHERE id =?";//SYNTAX, modifying them will cause error

    $id = 9;
    try{
        $statement = $conn -> prepare($sql);

        $data = [$id];

        $deleteStatus = $statement -> execute($data);
        var_dump($deleteStatus);
    }catch(Exception $exp){
        echo $exp->getMessage() . '<br>';
        echo 'File: ' . $exp->getFile() . '<br>';
        echo 'Line:' . $exp->getLine() . '<br>';
    }
?>