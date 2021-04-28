<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <canvas id = "my_canvas" height = "100" width = "200" style = "border : 1px solid black"></canvas>
</body>
</html>

<script>
    var c   = document.getElementById("my_canvas");
    var ctx = c.getContext("2d");
    ctx.moveTo(65,65);
    ctx.lineTo(200,100);
    ctx.stroke();  
</script>



