<?php
    /**
     * Functions,
     */
    #---------Functions-------------------
    echo date('l'), '<br>';
    # phpinfo();
    echo strrev("Hello world."), '<br>'; # revers
    echo str_repeat("Hip", 3), '<br>';  # repeat
    echo strtoupper('hooray!'), '<br>';  # upper register
    ##########################################

    $lowered = strtolower('The inPUt strIng');
    echo $lowered, '<br>';
    $ucfixed = ucfirst('the input string');
    echo $ucfixed, '<br>';
    echo ucfirst(strtolower('tHe Input sTriNg')), '<br>';
    ###############################
    echo fix_names("WILLIAM", "henry", "gatES");
    function fix_names($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return $n1 . " " . $n2 . " " . $n3;
    }

    ##########3##################################

    $names = fix_names_2("WILLIAM", "henry", "gatES");
    echo $names[0] . " " . $names[1] . " " . $names[2] . "<br>";
    function fix_names_2($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return array($n1, $n2, $n3);
    }

    #######################################
    $a1 = "WILLIAM";
    $a2 = "henry";
    $a3 = "gatES";
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names_3($a1, $a2, $a3);
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    
    function fix_names_3(&$n1, &$n2, &$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }
    #########################################
    $a1 = "WILLIAM";
    $a2 = "henry";
    $a3 = "gatES";
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names_4();
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    function fix_names_4()
    {
        global $a1; $a1 = ucfirst(strtolower($a1));
        global $a2; $a2 = ucfirst(strtolower($a2));
        global $a3; $a3 = ucfirst(strtolower($a3));
    }    
    include "library.php";
    echo 'Retreat' . "<br>";
    #require_once "library.php"; FATAL ERROR - DOESN'T EXISTS
    #echo "GET UP";
    #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    if (function_exists("array_combine"))
    {
        echo "Function exists" . "<br>";
    }
    else
    {
        echo "Function doesn't exists, desirable to create it yourself";
    }
