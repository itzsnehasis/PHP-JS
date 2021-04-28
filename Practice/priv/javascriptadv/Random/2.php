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
            $("button").click(function(){
                $(this).parents(".ex").hide("slow");
            });
        });
    </script>
<body>
    <div class = "ex">
        <button>Click Me</button>
        <P>HI AM SNEHASIS</P>
    </div>000110
</body>
</html>
<style>
    .ex{background-color: green; color: white; border-radius: 10px; padding: 15px 20px;}
</style>