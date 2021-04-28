<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "clear();">

    <script type="text/javascript">
        function clear()
        {
            document.getElementById('loader').style.display = "none";
        }
    </script>

    <div id = "loader" style = "height : 100%; width: 100%; background-color: black;">
        <div class = "circle">

        </div>
    </div>
    <?php
        sleep(   rand(5,8)  ) ;
        print file_get_contents("../tooltip/1.php");
    ?>

</body>
</html> 

<style>

    html, body { height: 100%; width: 100%; margin: initial;}
    .circle{
        position                 : absolute;
        background-color         : green;
        height                   : 200px;
        width                    : 200px;   
        margin-left              : 45%;
        margin-top               : 20%;
        border-radius            : 100%;
        animation-name           : circle_anim;
        animation-duration       : 2s; 
        animation-iteration-count: infinite;
    }

    @keyframes circle_anim{
        0%   {transform: scale(0.5,0.5);}
        50%  {transform: scale(1,1);}
        100% {transform: scale(0.5,0.5);}
    }

</style>