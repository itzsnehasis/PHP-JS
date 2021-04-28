<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIle</title>
</head>
<body>
    <?php
        function parseDir($folder){
            $handle = opendir($folder)
            while($file = readdir($handle)){
                if($file == "." || $file == "..")
                    continue;
                if(is_dir($folder."/".$file))
                    print "<b>$folder</b><br>";
                    parseDir($folder."/".$file);
                else
                    print "$file<br>";
            }
            closedir($handle);
        } 

        parseDir("/");
    ?>
</body>
</html>