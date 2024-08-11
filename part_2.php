<?php
    /*
    types of var's, CONSTasnts, echo and pring,
    functions, predifined CONSTants, scope of variables,
    expressions
    */
    $number = 12345 * 67890;  # 838102....
    echo substr($number, 3, 1);
    
    $pi = "3.14159";
    $radius = 5;
    echo $pi * ($radius * $radius);
    define("ROOT_LOCATION", "D/dd/sa");
    $directory = ROOT_LOCATION;

    echo "<br>This is a string " . __LINE__ . "in the file " . __FILE__ ."\n";
    $pi ? print "<br>TRUE<br>" : print "<br>FALSE";

    #------------------------scope of variables.------------------------

    function longdate($timestamp)
    {
        return date("<br>l F jS Y<br>", $timestamp);
    }
    echo longdate(time());
    echo longdate(time() - 17 * 24 * 60 * 60);


    function longdate_2($timestamp)
    {
        $temp = date("l F jS Y", $timestamp);
        return "Date: $temp";
    }

    $temp = "<br>Date3: ";
    echo $temp . longdate_3(time());

    function longdate_3($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }

    $temp = "<br>Date4: ";
    echo longdate_4($temp, time());
    function longdate_4($text, $timestamp)
    {
        return $text . date("l F jS Y", $timestamp);
    }

    function test()
    {
        static $count = 0;
        echo $count;
        $count++;
    }

    $came_from = htmlentities($_SERVER['HTTP_REFERER']);
    print '<br>dasdsadada' . 'ads';
    

    #------------------expressions------------------------
    $y = 3 * (abs(2*$pi) + 4);
    
