<?php
    if (!unlink('testfile2.new')) echo "Deleting is not possible";
    else echo "File 'testfile2.new has been successfully deleted.";