<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        xpos = 0;
        function move(){
            box   = document.getElementById('mydiv');
            box.style.top = xpos+"px";
            xpos += +5;
            setTimeout("move()", 30); 
        }
    </script>
</head>
<body onload = "move()">
    <div class = "boxx" id = "mydiv"></div>
</body>
</html>
<style>
    .boxx{height: 100px; width: 100px; background-color: green; position: absolute; top: 0px; left: 0px;}
</style>