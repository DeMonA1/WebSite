<?php
    require_once 'login.php';

    try
    {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e)
    {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    function mysql_entities_fix_string($pdo, $string)
    {
        return htmlentities(mysql_fix_string($pdo, $string));
    }

    function mysql_fix_string($pdo, $string)
    {
        return $pdo->quote(stripslashes($string));
    }

    $user = mysql_entities_fix_string($pdo, $_POST['user']);
    $pass = mysql_entities_fix_string($pdo, $_POST['pass']);
    $query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

    // etc.
    