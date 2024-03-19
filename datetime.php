<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y:m:d H:i:s');
    echo $date. "<br>";
    echo date_default_timezone_get();
    
    echo 'Timestamp in this moment:'.time().'<br>';

    //now, 7 December 2002, next Monday -> strtotime()

    echo strtotime('now').'<br>';
    echo 'Timestamp in this moment:'.strtotime('7 December 2002').'<br>';
    echo 'Timestamp next Monday:'.strtotime('next Monday').'<br>';
?>