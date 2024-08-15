<?php
    /* 
    Comments, syntaxis, variables, operators,
    assigning to variables, multistring commands,
    types of var's, CONSTasnts, echo and pring,
    functions, predifined CONSTants, scope of variables.  
    */
    echo " Today " . date('T') . '. ';
    // comment
    // echo "X equals $x";
?>
Last news.
Today <?php echo date('l'); ?>. Last news.


<?php
    $x = 0;
    $x += 10; // increase value $x in 10
    # comment
    /* This is very big area for
    big big enormous
    comment */
?>

<?php
    $x = 0;
    $x += 10;
    $mycounter = 1;
    $myarray = array('One', 'Two', 'Three');
    $mystring = 'String';
    echo "<br>", $mystring;
    $current_user = $mystring;
    $count = 17;
    $count = 17.5;
    $team = array('Mary', 'John', 'Mike','Like', 'Wike','Rike');
    echo "<br>", $team[4];
    $oxo = array(array('x', ' ', 'o'),
                ['o', ' ', 'x'],
                ['x', 'o', ' ']);
    echo "<br>", $oxo[1][2];
?>
<?php   // test 
    $username = "Fred Smith";
    echo "<br>", $username;
    echo "<br>";
    $current_user = $username;
    echo $current_user;
?>
<?php 
    echo 6 + 2;
    $j = 1;
    $k = -1;
    echo "<br>", $j .= $k;      # concatanation
    $hour = 13;
    if ($hour > 12 && $hour < 14) echo "<br>dolunch()";
    echo "<br>", True xor False;        # 1
    ++$j; --$k;
    if (++$j == 10) echo $j;
    $y = 0;
    if ($y-- == 0) echo "<br>", $y;
    echo 'You have ' . $k . ' messages.';
    echo '<br>lalalalalala $k lala';
    echo "<br>lalallalaala $k lala";
    $text = 'My spelling\'s still atroshus';
    $text1 = "She wrote upon it, \"Return to sender\".";
    $heading = "Data\tName\tPayment";
?>
<?php 
    $author = 'Steve Ballmer';
    echo "<br>Developers, Dervvkk, asd,adsadasdasd,dasad
    dasdasd,adsadsda,asdasdasdas,dasdasda,sda!
    $author.";

    $text = "Measuring programming progress by lines of code is like
    measuring aircraft building progress by weight.
    - $author.";

    echo <<<_END
    Debugging is twice as hard as wirting the code in the first place.
    Therefore, if you write the code as cleverly as possible, you are,
    by definition, not smart enough to debug it.
    $author.
    _END;

    $out = <<<_END
    <br> Normal people believe that if it ain't broke, don't fix it.
    Engineers believe that if it ain't broke, it doesn't have enough
    features yet.
    - $author.
    _END;
    echo $out;
?>