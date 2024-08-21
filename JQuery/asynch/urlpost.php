<?php //urlpost.php
    function sanitizeString($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }

    if (isset($_POST['url'])) {
        echo file_get_contents('https://' . sanitizeString($_POST['url']));
    }

