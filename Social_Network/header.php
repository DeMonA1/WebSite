<?php
    session_start();

    echo <<<_INIT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
            <link rel='stylesheet' href='style.css' type='text/css'>
            <script src='javascript.js'></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    _INIT;

    require_once  'functions.php';

    $userstr = 'Welcome Guest';
    $randstr = substr(md5(rand()), 0, 7); //cache

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $loggedin = true;
        $userstr = "Logged in as: $user";
    }
    else $loggedin = false;

    echo <<<_MAIN
            <title>My Web: $userstr</title>
        </head>
        <body>
            <div data-role='page'>
                <div data-role='header'>
                    <div id='logo' class='center'>W<img id='myid' src='myid.gif'>b's</div>
                    <div class='username'>$userstr</div>
                </div>
                <div data-role='content'>
    _MAIN;

    if ($loggedin) {
        echo <<< _LOGGEDIN
                    <div class='center'>
                        <a data-role='button' data-inline='true' data-icon='home'
                            data-transition="slide" href='members.php?view=$user&r=$randstr'>Home</a>
                        <a data-role='button' data-inline='true' data-icon='user'
                            data-transition="slide" href='members.php?r=$randstr'>Members</a>
                        <a data-role='button' data-inline='true' data-icon='heart'
                            data-transition="slide" href='friends.php?r=$randstr'>Friends</a>
                        <a data-role='button' data-inline='true' data-icon='mail'
                            data-transition="slide" href='messages.php?r=$randstr'>Messages</a>
                        <a data-role='button' data-inline='true' data-icon='edit'
                            data-transition="slide" href='profile.php?r=$randstr'>Edit Profile</a>
                        <a data-role='button' data-inline='true' data-icon='action'
                            data-transition="slide" href='logout.php?r=$randstr'>Log Out</a>
                    </div>
        _LOGGEDIN;
    }
    else {
        echo <<<_GUEST
                    <div class='center'>
                        <a data-role='button' data-inline='true' data-icon='home'
                            data-transition='slide' href='index.php?r=$randstr''>Home</a>
                        <a data-role='button' data-inline='true' data-icon='plus'
                            data-transition='slide' href='signup.php?r=$randstr''>Sign Up</a>
                        <a data-role='button' data-inline='true' data-icon='check'
                            data-transition='slide' href='login.php?r=$randstr''>Log In</a>
                    </div>
                    <p class='info'>(You must be logged in to use this app)</p>
        _GUEST;
    }