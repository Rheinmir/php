<?php
    /*
    session
    session in PHP is located on server(in XAMPP php.ini)
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
    $_SESSION['user'] = 'mir';
    $_SESSION['login'] = 'urbanite';
    
    unset($_SESSION['username']);
    
    echo '<pre>';
    print_r($_SESSION['username']);
    echo '</pre>';
    
    echo '<pre>';
    print_r($_SESSION['user']);
    echo '</pre>';

    echo '<pre>';
    print_r($_SESSION['login']);
    echo '</pre>';

    

?>