<?php
    $cmd = "dir";       # windows
    # $cmd = "ls";      # linux

    exec(escapeshellcmd($cmd), $output, $status);
    if ($status) echo "Exec command didn't execute.";
    else{
        echo "<pre>";
        foreach($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }