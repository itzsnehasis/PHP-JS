<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var state = "off";
        function myswitch(){
            var pic      = document.getElementById('pic');
            var myswitch = document.getElementById('myswitch');

            if(state == "off"){
                pic.src        = "./img/on.jpg";
                myswitch.value = "Off";
                state    = "on"; 
            }
            else{
                pic.src        = "./img/off.jpg";
                myswitch.value = "On";
                state          = "off"; 
            }
        }
    </script>
</head>
<body>
    <center>
        <img src="./img/off.jpg" height = "300px" width = "200px" id  = "pic">
        <br>
        <input type="submit" value = "On" onclick = "myswitch()" id  = "myswitch">
    </center>
</body>
</html>