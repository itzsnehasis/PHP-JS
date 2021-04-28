<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php
        mkdir("file");
        
        $tmp = explode(".", $_FILES['myfile']['name']);
        $ext = strtolower(trim(end($tmp)));

        if($ext == "jpg" || $text == "jpeg" || $text == "gif" || $text == "png"){
            $new_file  = "file/".time()."_".$_FILES['myfile']['name'];
            copy($_FILES['myfile']['tmp_name'], $new_file);
            header("location: index.php");
        }

        else
            print "<br> Sorry Invalid FIle Type";
    ?>
</body>
</html>