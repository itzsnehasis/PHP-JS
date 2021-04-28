<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        bulb_state = "off";
        function myswitch(){
            var pic = document.getElementById('bulb');
            if(bulb_state == "off"){
                pic.src   = "./img/lighton.png";
                bulb_state = "on";
            }

            else{
                pic.src    = "./img/lightoff.png";
                bulb_state = "off"; 
            }
        }
    </script>
</head>
<body>
    <center>
        <img src = "./img/lightoff.png" id = "bulb">
        <br>
        <input type="submit" value = ""  class = "button" onclick = "myswitch()" id = "switch">
    </center>
</body>
</html>
<style>
    .button{
        height          : 80px;
        width           : 120px;
        background-color: blue;
        margin-top      : 5%;
        color           : white;
        border-radius   : 10px;
        border          : none;
    }
</style>