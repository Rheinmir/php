<?php
    /*
    session
    session in PHP is located on server(php.ini)
    client(browser/tab/...) closed, session'll be killed
    */ 

    session_start();
    /*
    $_SESSION[$name] = $value
    $_SESSION: global variable of PHP, contains every sesion (this variable is array)
    $name: name of session
    $value: session's variable need to create
    */
    //create session
    $_SESSION['username'] = 'rhein';

    echo '<pre>';
    print_r($_SESSION['username']);
    echo '</pre>';
    
    

?>