<?php
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];

    $_SESSION['check'] = hash('password123', $_SERVER['REMOTE_ADDR'] .
        $_SERVER['HTTP_USER_AGENT']);

    if ($_SESSION['check'] != hash('password123', $_SERVER['REMOTE_ADDR'] .
    $_SERVER['HTTP_USER_AGENT'])) different_user();

    function different_user()
    {
        echo 'some actions';
    }