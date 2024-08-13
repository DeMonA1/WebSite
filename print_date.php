<?php
    echo "<pre>";

    printf("Result is equal $%15f\n", 123.42 / 12);  #15 whitespace

    printf("Result is equal $%015f\n", 123.42 / 12);   #15 zero

    printf("Result is equal $%15.2f\n", 123.42 / 12);  # 15 whitespace and 0.00
    
    printf("Result is equal $%015.2f\n", 123.42 / 12);

    printf("Result is equal $%'#15.2f\n", 123.42 / 12);


    $h = "Rasmus";
    printf("[%s]\n", $h);
    printf("[%12s]\n", $h);
    printf("[%-12s]\n", $h);
    printf("[%012s]\n", $h);
    printf("[%'#12s]\n", $h);

    $d = 'Rasmus Lerdorf';
    printf("[%12.8s]\n", $d);
    printf("[%-12.12s]\n", $d);
    printf("[%-'@12.10s]\n", $d);
##################################################

    $month = 9;
    $day = 31;
    $year = 2025;

    if (checkdate($month, $day, $year)) echo "Acceptable date";
    else echo "Unacceptable date";

    $d = "Happy Birthday";
    printf("%'*7.5s", $d);
    
