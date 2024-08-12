<?php
    $temp = explode(' ', "This sentence consists from 5 words.");
    print_r($temp);
    echo "<br>";

    $temp = explode("**", "This**sentence**has***stars.");
    print_r($temp);
    echo "<br>";
###########################################################
    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifrey";
    $system = "Gridlock";
    $constellation = "Kasterborous";

    $contact = compact('fname', 'sname', 'planet', 'system','constellation');
    echo "<br>";
    print_r($contact);
###########################################################
    $j = 23;
    $temp = "Hello";
    $address = "1 Old Street";
    $age = 61;
    echo "<br>";
    print_r(compact (explode(' ', 'j temp address age')));
##############################################################




    