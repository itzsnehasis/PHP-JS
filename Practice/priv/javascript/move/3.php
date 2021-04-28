<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        ypos       = 0;
        xpos       = 0;
        xdirection = 1;
        ydirection = 1;
        function move(){
            box              = document.getElementById('mydiv');
            box.style.top    = ypos + "px";
            box.style.left   = xpos + "px"; 
            ypos             = ypos + 5*ydirection;
            xpos             = xpos + 5*xdirection;
            box.style.width  = 100 + "px";
            box.style.height  = 100 + "px";
            if(ypos > window.innerHeight-100){
                ydirection      = -1;
                box.style.height = 150 + "px";
            }
            if(ypos < 0){
                ydirection = 1;
                box.style.height = 150 + "px";
            }
            if(xpos > window.innerWidth-100){
                xdirection = -1;
                box.style.height = 150 + "px";
            }
            
            if(xpos < 0){
                xdirection = 1;
                box.style.height = 150 + "px";
            }
            setTimeout("move()", 30); 
        }
    </script>
</head>
<body onload =  "move()" bgcolor = "black">
    <div class = "box" id = "mydiv"></div>
</body>
</html>
<style>
    .box{
        height: 100px; 
        width: 100px; 
        background-color: green; 
        position: absolute; 
        top: 0px; 
        left: 0px; 
        border-radius: 100px;
    }
</style>