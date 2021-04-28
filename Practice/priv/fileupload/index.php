<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action = "upload.php" method = "POST" enctype = "multipart/form-data">
        Upload File : <input type = "file"   name  = "myfile">
                      <input type = "submit" value = "Upload" >
    </form>

    <?php
        $handle = opendir("./file");
        while($file = readdir($handle)){
            if($file  == "." || $file == "..")
                continue;
            print "<img src = \"file/$file\" width = 100>";
        }
    ?>
</body>
</html>