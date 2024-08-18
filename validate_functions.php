<?php   
    function fix_string($string) {
        $string = stripcslashes($string);
        return htmlentities($string);
    }

    function validate_forename($field) {
        return ($field == '') ? 'A name has not been entered<br>' : '';
    }

    function validate_surname($field) {
        return ($field == '') ? ' A surname has not been entered<br>' : '';
    }

    function validate_username($field) {
        if ($field == '') return 'An username has not been entered<br>';
        else if (strlen($field) < 5)
            return 'Username must have at least 5 characters<br>';
        else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
            return 'Only letters, numbers, - and _ are allowed in the username<br>';
        return '';
    }

    function validate_password($field){
        if ($field == '') return "A password has not been entered<br>";
        else if (strlen($field) < 6)
            return 'Password must have at least 6 characters<br>';
        else if (!preg_match("/[a-z]/", $field) ||
                !preg_match("/[A-Z]/", $field) ||
                !preg_match("/[0-9]/", $field))
            return "Password required a 1 charachter from each set a-z, A-Z and 0-9<br>";
        return '';
    }

    function validate_age($field) {
        if ($field == '') return 'An age has not been entered<br>';
        else if ($field < 18 || $field > 110)
            return "An age must be between 18 and 110<br>";
        return ''; 
    }

    function validate_email($field) {
        if ($field == '') return "An email has not been entered<br>";
        else if (!((strpos($field, '.') > 0) &&
                    (strpos($field, '@') > 0)) ||
                    preg_match("/[^a-zA-Z0-9.@_-]/", $field))
            return "An email has incorrect format<br>";
        return '';
    }