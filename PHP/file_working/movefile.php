<?php
    if (rename('testfile2.txt', 'testfile2.new'))
        echo "File has been successfully renamed in 'testfile2.new";
    else echo "Renaming is not possible";