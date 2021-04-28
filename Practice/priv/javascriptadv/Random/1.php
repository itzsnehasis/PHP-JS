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
                $(this).hide();
            });
        });
    </script>
<body>
    <button>Click Me!</button>
</body>
</html>