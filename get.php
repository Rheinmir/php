<?php

if(isset($_GET['action'])){
    echo $_GET['action'];
}
else{
    echo 'action không tồn tại';
}
// echo "<pre>";
// print_r($_GET['action']);
// echo "</pre>";
?>