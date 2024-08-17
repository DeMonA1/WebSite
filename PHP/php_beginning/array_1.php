<?php
    /**
     * array with numeric indexing
     * asociative arrays
     * foreach...as
     */

    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";
    //print_r($paper);

    $paper[1] = "Copier";
    $paper[2] = "Inkjet";
    $paper[3] = "Laser";
    $paper[4] = "Photo";

    //print_r($paper);

    for ($j=0; $j < 4; $j++)
        echo "$j: $paper[$j]<br>";

        
    ##----asociative arrays----------------------
    $paper['copier'] = 'Copier & Multipurpose';
    $paper['inkjet'] = 'Inkjet Printer';
    $paper['laser'] = 'Lser Printer';
    $paper['photo'] = 'Photographic Paper';
    echo $paper['laser'] . '<br>';

    ########################################

    $p1 = array('Copier', 'Inkjet', 'Laser', 'Photo');
    echo "Element of array p1: " . $p1[2] . "<br>";
    $p2 = array('copier' => 'Copier & Multipurpose',
                'inkjet' => 'Inkjet Printer',
                'laser' => 'Laser Printer',
                'photo' => 'Photographic Paper');
    echo "Element of array p2: " . $p2['inkjet'] . '<br>';


    #------------------foreach...as-------------------------
    $paper = array('Copier', 'Inkjet', 'Laser', 'Photo');
    $j = 0;
    foreach ($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }


    $paper = array('copier' => 'Copier & Multipurpose',
                'inkjet' => 'Inkjet Printer',
                'laser' => 'Laser Printer',
                'photo' => 'Photographic Paper');
    foreach ($paper as $item => $description)
        echo "$item: $description<br>";

    ############################################################

    $paper = array('copier' => 'Copier & Multipurpose',
            'inkjet' => 'Inkjet Printer',
            'laser' => 'Laser Printer',
            'photo' => 'Photographic Paper');
    
    function myEach(&$array)        // Replacement for the deprecated each function
    {
        $key = key($array);
        $result = ($key === null) ? false:
                    [$key, current($array), 'key', 'value' => current($array)];
        next($array);
        return $result;
    }
    
    while (list($item, $description) = myEach($paper))
        echo "$item: $description<br>";

    ###################################

    list($a, $b) = array('Alice', 'Bob');
    echo "a=$a b=$b";

    ##############################################

    $products = array(
        'paper' => array(
            'copier' => 'Copier & Multipurpose',
            'inkjet' => 'Inkjet Printer',
            'laser' => 'Laser Printer',
            'photo' => 'Photographic Paper'),
        
        'pens' => array(
            'ball' => 'Ball Point',
            'hilite' => 'Highlighters',
            'marker' => 'Markers'),
        
        'misc' => array(
            'rape' => 'Sticky Tape',
            'glue' => 'Adhesives',
            'clips' => 'Paperclips')
        );

        echo "<pre>";

        foreach ($products as $section => $items)
            foreach ($items as $key => $value)
                echo "$section:\t$key\t($value)<br>";

        echo "</pre>";

        ###########################################

    $chessboard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
        );

        echo "<pre>";

        foreach ($chessboard as $row)
        {
            foreach ($row as $piece)
                echo "$piece ";
            echo "<br>";
        }

        echo "</pre>";

        echo "</pre>";

    


