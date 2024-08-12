<?php
    $fh = fopen('testfile.txt', 'r+') or die("File opening failed");
    $text = fgets($fh);
    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "\n$text") or die("Failed of writing to file");
        flock($fh, LOCK_UN);
    }
    fclose($fh);
    echo "File 'testfile.txt has been successfully refreshed";