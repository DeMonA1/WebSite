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

    print '<br>dasdsadada' . 'ads<br>';
    

    #------------------expressions------------------------
    $y = 3 * (abs(2*$pi) + 4);
    echo "a: [" . TRUE . "]<br>";
    echo "b: [" . FALSE . "]<br>";

    echo "a: [" . (20 > 9) . "]<br>";
    echo "b: [" . (5 == 6) . "]<br>";
    echo "c: [" . (1 == 0) . "]<br>";
    echo "d: [" . (1 == 1) . "]<br>";

    $myname = "Brian";
    $myage = 37;

    echo "a: " . 73 . "<br>";      # int literal
    echo "b: " . "Hello" . "<br>"; # string literal
    echo "c: " . FALSE . "<br>";    # CONST literal
    echo "d: " . $myname . "<br>";  # string var
    echo "e: " .  (string)$myage . "<br>";   # int var

    $day_number = 55;
    $days_to_new_year = 366 - $day_number;  # expr
    if ($days_to_new_year < 30)
    {
        echo "nEw yEaR soOn";           # instruction
    }

    #----------------------------operators---------------------------

    $a = '1000';
    $b = '+1000';
    if ($a == $b) echo '1<br>';
    if ($a === $b) echo '2';

    $a = '1000';
    $b = '+1000';
    if ($a != $b) echo '1<br>';
    if ($a !== $b) echo '2<br>';


    $a = 3; $b = 3;

    if ($a > $b) echo "$a greater than $b<br>";
    if ($a < $b) echo "$a less than $b<br>";
    if ($a >= $b) echo "$a greater or equal to $b<br>";
    if ($a <= $b) echo "$a less or equal to $b<br>";


    $a = 1; $b = 0;
    echo ($a AND $b) . "<br>";
    echo ($a or $b) . "<br>";
    echo ($a XOR $b) . "<br>";
    echo !$a . "<br>";
