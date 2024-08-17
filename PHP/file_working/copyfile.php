<?php
    copy('testfile.txt', 'testfile2.txt') or die("Copying is not possible");
    echo "File has successfully copyed in 'testfile2.txt'";

    if (!copy('testfile.txt', 'testfile2.txt')) echo "Copying is not possible";
    else echo "File has successfully copyed in 'testfile2.txt'";