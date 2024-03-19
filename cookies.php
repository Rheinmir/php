<?php
    /*
    setcookies($name,$value,$expire = 0,$path="",$domain="",$security=false,$httponly = false)
    + name
    + value
    + expire: expiration time (in timestamp) u + path: active cookie path : time():current time
    + domain: domain's cookie active
    + security: cookie only active though https protocol
    + httponly: cookie only active though http protocol 
    */

    //set cookie
    setcookie(
        'user',
        'learning php',
         time() + 86400,
         '/php',
         '',
         false,
         true
        );

    //read cookie
    //echo $_COOKIE['user'];

    //delete cookie
    setcookie(
        'user',
        'learning php',
         time() -60,
         '/php',
         '',
         false,
         true
        );
?>