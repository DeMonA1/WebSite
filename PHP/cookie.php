<?php
    setcookie('location', 'USA', time() + 60 * 60 * 24, '/');
    if (isset($_COOKIE['lcoation'])) $location = $_COOKIE['location'];
    
    # delete cookie
    setcookie('location', 'USA', time() - 2592000, '/');
    #or
    setcookie('location', False, time(),'/');