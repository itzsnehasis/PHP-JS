<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src = "./jquery.js"></script>
<script>
        $(document).ready(function(){
            $(".flip").click(function(){
                $(".panel").slideToggle("slow");
            });
        });
</script>
<body>
    <div class = "panel">
        <p>becuase time is valueable, er deliver quick and easy learning.</p>
        <p>at w3school you can learning everything</p>
    </div>
    <p class = "flip">Show/hide</p>
</body>
</html>
<style>
    .panel , .flip {
        margin       : 0px;
        background   : green;
        border       : 2px solid red;
        text-align   : center;
        padding      : 5px;
        color        : white;
        border-radius: 10px;
    }
    
    .panel{
        height     : 120px;
        text-align : center;
        display    : none;
    }
</style>