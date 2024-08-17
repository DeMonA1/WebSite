<?php //continue.php

    function destroy_session_and_data()
    {
        $_SESSION = array();
        setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
    }

    session_start();

    if (isset($_SESSION['forename']))
    {
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];

        destroy_session_and_data();

        echo "Welcome, $forename.<br>
        Your full name $forename $surname.<br>";
    }
    else echo "Please, to enter <a href='authenticate.php'>click here
    </a>.";