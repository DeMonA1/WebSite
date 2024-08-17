<?php
    $fh = fopen("testfile.txt", 'w') or die("The file could not be created.");
    $text = <<< _END
    String 1
    String 2
    String 3
    _END;

    fwrite($fh, $text) or die("Error writing to file");
    fclose($fh);
    echo "File 'testfile.txt' have successfully written";
    ########################################################

    $fh = fopen('testfile.txt', 'r') or die("This file doesn't exists or you haven't permissions for open it");
    $line = fgets($fh);
    fclose($fh);
    echo '<br>' . $line;

    $fh = fopen('testfile.txt', 'r') or die("This file doesn't exists or you haven't permissions for open it");
    $text = fread($fh, 3);
    fclose($fh);
    echo '<br>' . $text;

    #############################

    echo "<br>" . "<prev>";
    echo file_get_contents("testfile.txt");
    echo "</prev>";



    