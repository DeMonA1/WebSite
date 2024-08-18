<?php // adduser.php

    require_once 'validate_functions.php';

    $forename = $surname = $username = $password = $age = $email = '';

    if (isset($_POST['forename']))
        $forename = fix_string($_POST['forename']);
    if (isset($_POST['surname']))
        $surname = fix_string($_POST['surname']);
    if (isset($_POST['username']))
        $username = fix_string($_POST['username']);
    if (isset($_POST['password']))
        $password = fix_string($_POST['password']);
    if (isset($_POST['age']))
        $age = fix_string($_POST['age']);
    if (isset($_POST['email']))
        $email = fix_string($_POST['email']);

    $fail = validate_forename($forename);
    $fail .= validate_surname($surname);
    $fail .= validate_username($username);
    $fail .= validate_password($password);
    $fail .= validate_age($age);
    $fail .= validate_email($email);

    echo "<!DOCTYPE html>\n<html><head><title>An example form</title>";

    if ($fail == '')
    {
        echo "</head><body>From check has been completed successful:
            $forename, $surname, $username, $password, $age, $email.</body></html>";

        // The submitted field will be entered into database
        // in this place with pre-use of hash encryption for the password

    exit;
    }

    // HTML and JS

    echo <<<_END
        <!-- HTML AND JS -->
    
        <style>
            .signup{
                border: 1px solid #999999;
                font: normal 14px helvetica;
                color:#444444;
            }
        </style>
        <script src="validate_functions.js"></script>
    </head>
    <body>
        <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
            <th colspan="2" align="center">Registration form</th>

            <tr><td colspan='2'>Unfornunately, in your form <br>
            has been found the following mistakes: <p><font color=red
            size=1><i>$fail</i></font></p></td></tr>

            <form method="post" action="adduser.php" onSubmit="return validate(this)">
                <tr><td>Name</td>
                    <td><input type='text' maxlength="32" name='forename' value="$forename"></td></tr>
                <tr><td>Surname</td>
                    <td><input type='text' maxlength="32" name='surname' value="$surname"></td></tr>
                <tr><td>Username</td>
                    <td><input type='text' maxlength="16" name='username' value="$username"></td></tr>
                <tr><td>Password</td>
                    <td><input type='text' maxlength="12" name='password' value="$password"></td></tr>
                <tr><td>Age</td>
                    <td><input type='text' maxlength="3" name='age' value="$age"></td></tr>
                <tr><td>Email</td>
                    <td><input type='text' maxlength="64" name='email' value="$email"></td></tr>
                <tr><td colspan="2" align="center"><input type='submit' value='Signup'></td></tr>
            </form>
        </table>
    </body>
    _END;
 
