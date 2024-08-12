<?php
    echo <<<_END
    <html>
    <head><title>PHP-form for upload files in the server</title></head>
    <body> 
    <form method='post' action='upload2.php' 
    enctype='multipart/form-data'>
    Choose a file with extension JPG, GIF, PNG, TIF: 
    <input type='file' name='filename' size='10>
    <input type='submit' value='Upload'></form>
    _END;

    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];

        switch($_FILES['filename']['type'])
        {
            case 'image/jpeg': $ext = 'jpg'; break;
            case 'image/gif': $ext = 'gif'; break;
            case 'image/png': $ext = 'png'; break;
            case 'image/tiff': $ext = 'tif'; break;
            default: $ext =''; break;
        }
        if ($ext)
        {
            $n = "image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "Uploading image '$name' with name '$n':<br>";
            echo "<img src='$n'>";
        }
        else echo "'$name' - unacceptable image file";
    }
    else echo "Uploading of file didn't happen";
    
    echo "</body></html>";