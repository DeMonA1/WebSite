<?php 
    /*
    Conditions, cycles, 
    */

    #------------------Conditions---------------------
    ##---------else/if/elseif-------------------
    $bank_balance = 100;
    $savings = 100;
    if ($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    }

    ###############################
    if ($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    }
    else
    {
        $savings += 50;
        $bank_balance -= 50;
        echo $bank_balance . '<br>';
    }

    #################################
    if ($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    }
    elseif ($bank_balance > 200)
    {
        $savings += 100;
        $bank_balance -= 100;
    }
    else
    {
        $savings += 50;
        $bank_balance -= 50;
    }

    ##########################
    $page = 10;
    if ($page == "Home") echo "You choose Home";
    elseif ($page == "Links") echo "You choose Links";
    elseif ($page == "About") echo "You choose About";
    elseif ($page == "News") echo "You choose News";
    elseif ($page == "Login") echo "You choose Login";
    else echo "Unrecignized choice<br>";

    ##=====switch/case/default|| match-------------####
    switch ($page)
    {
        case "Home":
            echo "You choose Home";
            break;
        case "About":
            echo "You choose About";
            break;
        case "News":
            echo "You choose News";
            break;
        case "Login":
            echo "You choose Login";
            break;
        case "Links":
            echo "You choose Links";
            break;
        default:
            echo 'Unrecognized choice<br>';
            break;
    }
    ######################################3
    $country = 'USA';
    switch ($country)
    {
        case "UK":
        case "USA":
        case "Australia":
        default:
            $lang = 'English';
            break;
        case 'Spain':
            $lang = 'Spanish';
            break;
        case 'Germany':
        case 'Austria':
            $lang = 'German';
            break;
    }
    # EQUAL TO

    $lang = match($country)
    {
        'UK', 'USA', 'Australia' =>'English',
        'Spain' => 'Spanish',
        'Germany', 'Austria' => 'German',
        default =>'English',
    };

    $a = '0e0';
    $result = match($a)
    {
        0 => 'null',
        '0e0' => 'a',
    };
    echo '<br>' . $result;

    ##############################
    switch ($page):
        case "Home":
            echo "You choose Home";
            break;
        // etc.

        case "Links":
            echo "You choose Links";
            break;
    endswitch;
    #-------------- ? : -----------------------------
    $fuel = 0.1;
    echo $fuel <=1 ? "Refueling is required<br>" : "Fuel is enough";

    $enough = $fuel <= 1 ? FALSE : TRUE;
    $fuel && 1 ? TRUE : FALSE;

    #---------------Cycles-----------------------------
    ###----------------while...do/for-------------------------
    $count = 1;
    while ($count <= 12)
    {
        echo "Number $count multiplied by 12 equel " . $count * 12 . "<br>";
        ++$count;
    }
    ########################################
    $count = 0;
    while (++$count <= 12)
        echo "Number $count multiplied by 12 equel " . $count * 12 . "<br>";
    #####################################
    $count = 1;
    do
        echo "Number $count multiplied by 12 equel " . $count * 12 . "<br>";
    while (++$count <= 12);
    ######################################
    $count = 1;
    do {
        echo "Number $count multiplied by 12 equel " . $count * 12 . "<br>";
        echo "<br>";
    }
    while (++$count <= 12);
    ######################################
    for ($count = 1; $count <= 12; ++$count)
        echo "Number $count multiplied by 12 equel " . $count * 12 . "<br>";
    ##################################
    for ($count = 1; $count <= 12; ++$count)
    {
        echo "Number $count multiplied by 12 equel " . $count * 12 . "<br>";
        echo "<br>";
    }
        ##################################

    $fp = fopen("text.txt", 'wb');
    for ($j = 0; $j < 100; ++$j)
    {
        if (!fwrite($fp, "data")) break;
    }
    fclose($fp);

    #########################################
    $j = 11;
    while ($j > -10)
    {
        $j--;
        if ($j == 0) continue;
        echo (10 / $j) . "<br>";
    }

    #Implicit and explicit type conversion---------------
    $a = 56;
    $b = 12;
    $c = $a / $b;
    echo 'SSSS:',$c;
