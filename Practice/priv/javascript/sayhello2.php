<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function enter(){
            msg = document.f1.lol.value;
            alert('you entered  '+msg);
        }
    </script>
</head>
<body>
    <form name = "f1" onsubmit = "enter()">
        <input type = "text" name = "lol" >
        <input type = "submit">
    </form>
</body>
</html>