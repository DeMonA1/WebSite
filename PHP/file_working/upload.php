<?php
    echo <<<_END
    <html>
    <head><title>PHP-form for upload files in the server</title></head>
    <body> 
    <form method='post' action='upload.php' 
    enctype='multipart/form-data'>
    Choose a file: <input type='file' name='filename' size='10>
    <input type='submit' value='Upload'>
    </form>
    _END;

    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];
        move_uploaded_file($_FILES['filename']['tmp_name'], $name);
        echo "Uploading image '$name'<br><img src='$name'>";
    }
    echo "</body></html>";